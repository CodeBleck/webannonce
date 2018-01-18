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
				<p><a href="mobileapp.html"><i class="fa fa-download" aria-hidden="true"></i>Download Mobile App </a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="signin.html" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Sign In</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="help.html"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
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
											<select id="basic2" class="show-tick form-control" multiple>
												<optgroup label="Ville Populaire">
													<option selected style="display:none;color:#eee;">Selectionner votre ville</option>
													<option>Douala</option>
													<option>Yaounde</option>
													<!--<option>Phoenix</option>
													<option>Little Rock</option>
													<option>Los Angeles</option>
													<option>Denver</option>
													<option>Bridgeport</option>
													<option>Wilmington</option>
													<option>Jacksonville</option>
													<option>Atlanta</option>
													<option>Honolulu</option>
													<option>Boise</option>
													<option>Chicago</option>
													<option>Indianapolis</option>-->
												</optgroup>
													<optgroup label="Douala">
														<option>Akwa</option>
														<option>Bounamoussadi</option>
														<option>Bonandjo</option>
														<option>Bonapriso</option>
														<option>Logpom</option>
														<option>Deido</option>
													</optgroup>
													<!--<optgroup label="Alaska">
														<option>Anchorage</option>
														<option>Fairbanks</option>
														<option>Juneau</option>
														<option>Sitka</option>
														<option>Ketchikan</option>
													</optgroup>-->
													<optgroup label="Arizona">
														<option>Phoenix</option>
														<option>Tucson</option>
														<option>Mesa</option>
														<option>Chandler</option>
														<option>Glendale</option>
													</optgroup>
													<optgroup label="Arkansas">
														<option>Little Rock</option>
														<option>Fort Smith</option>
														<option>Fayetteville</option>
														<option>Springdale</option>
														<option>Jonesboro</option>
													</optgroup>
													<optgroup label="California">
														<option>Los Angeles</option>
														<option>San Diego</option>
														<option>San Jose</option>
														<option>San Francisco</option>
														<option>Fresno</option>
													</optgroup>
													<optgroup label="Colorado">
														<option>Denver</option>
														<option>Colorado</option>
														<option>Aurora</option>
														<option>Fort Collins</option>
														<option>Lakewood</option>
													</optgroup>
													<optgroup label="Connecticut">
														<option>Bridgeport</option>
														<option>New Haven</option>
														<option>Hartford</option>
														<option>Stamford</option>
														<option>Waterbury</option>
													</optgroup>
													<optgroup label="Delaware">
														<option>Wilmington</option>
														<option>Dover</option>
														<option>Newark</option>
														<option>Bear</option>
														<option>Middletown</option>
													</optgroup>
													<optgroup label="Florida">
														<option>Jacksonville</option>
														<option>Miami</option>
														<option>Tampa</option>
														<option>St. Petersburg</option>
														<option>Orlando</option>
													</optgroup>
													<optgroup label="Georgia">
														<option>Atlanta</option>
														<option>Augusta</option>
														<option>Columbus</option>
														<option>Savannah</option>
														<option>Athens</option>
													</optgroup>
													<optgroup label="Hawaii">
														<option>Honolulu</option>
														<option>Pearl City</option>
														<option>Hilo</option>
														<option>Kailua</option>
														<option>Waipahu</option>
													</optgroup>
													<optgroup label="Idaho">
														<option>Boise</option>
														<option>Nampa</option>
														<option>Meridian</option>
														<option>Idaho Falls</option>
														<option>Pocatello</option>
													</optgroup>
													<optgroup label="Illinois">
														<option>Chicago</option>
														<option>Aurora</option>
														<option>Rockford</option>
														<option>Joliet</option>
														<option>Naperville</option>
													</optgroup>
													<optgroup label="Indiana">
														<option>Indianapolis</option>
														<option>Fort Wayne</option>
														<option>Evansville</option>
														<option>South Bend</option>
														<option>Hammond</option>														       
													</optgroup>
													<optgroup label="Iowa">
														<option>Des Moines</option>
														<option>Cedar Rapids</option>
														<option>Davenport</option>
														<option>Sioux City</option>
														<option>Waterloo</option>       													
													</optgroup>
													<optgroup label="Kansas">
														<option>Wichita</option>
														<option>Overland Park</option>
														<option>Kansas City</option>
														<option>Topeka</option>
														<option>Olathe  </option>            													
													</optgroup>
													<optgroup label="Kentucky">
														<option>Louisville</option>
														<option>Lexington</option>
														<option>Bowling Green</option>
														<option>Owensboro</option>
														<option>Covington</option>        														
													</optgroup>
													<optgroup label="Louisiana">
														<option>New Orleans</option>
														<option>Baton Rouge</option>
														<option>Shreveport</option>
														<option>Metairie</option>
														<option>Lafayette</option>          														
													</optgroup>
													<optgroup label="Maine">
														<option>Portland</option>
														<option>Lewiston</option>
														<option>Bangor</option>
														<option>South Portland</option>
														<option>Auburn</option>         														
													</optgroup>
													<optgroup label="Maryland">
														<option>Baltimore</option>
														<option>Frederick</option>
														<option>Rockville</option>
														<option>Gaithersburg</option>
														<option>Bowie</option>         														
													</optgroup>
													<optgroup label="Massachusetts">
														<option>Boston</option>
														<option>Worcester</option>
														<option>Springfield</option>
														<option>Lowell</option>
														<option>Cambridge</option>  
													</optgroup>
													<optgroup label="Michigan">
														<option>Detroit</option>
														<option>Grand Rapids</option>
														<option>Warren</option>
														<option>Sterling Heights</option>
														<option>Lansing</option> 
													</optgroup>
													<optgroup label="Minnesota">
														<option>Minneapolis</option>
														<option>St. Paul</option>
														<option>Rochester</option>
														<option>Duluth</option>
														<option>Bloomington</option>      														
													</optgroup>
													<optgroup label="Mississippi">
														<option>Jackson</option>
														<option>Gulfport</option>
														<option>Southaven</option>
														<option>Hattiesburg</option>
														<option>Biloxi</option>         														
													</optgroup>
													<optgroup label="Missouri">
														<option>Kansas City</option>
														<option>St. Louis</option>
														<option>Springfield</option>
														<option>Independence</option>
														<option>Columbia</option>            														
													</optgroup>
													<optgroup label="Montana">
														<option>Billings</option>
														<option>Missoula</option>
														<option>Great Falls</option>
														<option>Bozeman</option>
														<option>Butte-Silver Bow</option>         														
													</optgroup>
													<optgroup label="Nebraska">
														<option>Omaha</option>
														<option>Lincoln</option>
														<option>Bellevue</option>
														<option>Grand Island</option>
														<option>Kearney</option>        													
													</optgroup>
													<optgroup label="Nevada">
														<option>Las Vegas</option>
														<option>Henderson</option>
														<option>North Las Vegas</option>
														<option>Reno</option>
														<option>Sunrise Manor</option>            													
													</optgroup>
													<optgroup label="New Hampshire">
														<option>Manchesters</option>
														<option>Nashua</option>
														<option>Concord</option>
														<option>Dover</option>
														<option>Rochester</option>              													
													</optgroup>
													<optgroup label="New Jersey">
														<option>Newark</option>
														<option>Jersey City</option>
														<option>Paterson</option>
														<option>Elizabeth</option>
														<option>Edison</option> 
													</optgroup>
													<optgroup label="New Mexico">
														<option>Albuquerque</option>
														<option>Las Cruces</option>
														<option>Rio Rancho</option>
														<option>Santa Fe</option>
														<option>Roswell</option>       
													</optgroup>
													<optgroup label="New York">
														<option>New York</option>
														<option>Buffalo</option>
														<option>Rochester</option>
														<option>Yonkers</option>
														<option>Syracuse</option>        														
													</optgroup>
													<optgroup label="North Carolina">
														<option>Charlotte</option>
														<option>Raleigh</option>
														<option>Greensboro</option>
														<option>Winston-Salem</option>
														<option>Durham</option>          														
													</optgroup>
													<optgroup label="North Dakota">
														<option>Fargo</option>
														<option>Bismarck</option>
														<option>Grand Forks</option>
														<option>Minot</option>
														<option>West Fargo</option>
													</optgroup>
													<optgroup label="Ohio">
														<option>Columbus</option>
														<option>Cleveland</option>
														<option>Cincinnati</option>
														<option>Toledo</option>
														<option>Akron</option>      
													</optgroup>
													<optgroup label="Oklahoma">
														<option>Oklahoma City</option>
														<option>Tulsa</option>
														<option>Norman</option>
														<option>Broken Arrow</option>
														<option>Lawton</option>        														
													</optgroup>
													<optgroup label="Oregon">
														<option>Portland</option>
														<option>Eugene</option>
														<option>Salem</option>
														<option>Gresham</option>
														<option>Hillsboro</option>          														
													</optgroup>
													<optgroup label="Pennsylvania">
														<option>Philadelphia</option>
														<option>Pittsburgh</option>
														<option>Allentown</option>
														<option>Erie</option>
														<option>Reading</option>         														
													</optgroup>
													<optgroup label="Rhode Island">
														<option>Providence</option>
														<option>Warwick</option>
														<option>Cranston</option>
														<option>Pawtucket</option>
														<option>East Providence</option>   
													</optgroup>
													<optgroup label="South Carolina">
														<option>Columbia</option>
														<option>Charleston</option>
														<option>North Charleston</option>
														<option>Mount Pleasant</option>
														<option>Rock Hill</option> 
													</optgroup>
													<optgroup label="South Dakota">
														<option>Sioux Falls</option>
														<option>Rapid City</option>
														<option>Aberdeen</option>
														<option>Brookings</option>
														<option>Watertown</option> 
													</optgroup>
													<optgroup label="Tennessee">
														<option>Memphis</option>
														<option>Nashville</option>
														<option>Knoxville</option>
														<option>Chattanooga</option>
														<option>Clarksville</option>       
													</optgroup>
													<optgroup label="Texas">
														<option>Houston</option>
														<option>San Antonio</option>
														<option>Dallas</option>
														<option>Austin</option>
														<option>Fort Worth</option>   
													</optgroup>
													<optgroup label="Utah">
														<option>Salt Lake City</option>
														<option>West Valley City</option>
														<option>Provo</option>
														<option>West Jordan</option>
														<option>Orem</option>   
													</optgroup>	
													<optgroup label="Vermont">
														<option>Burlington</option>
														<option>Essex</option>
														<option>South Burlington</option>
														<option>Colchester</option>
														<option>Rutland</option>   
													</optgroup>
													<optgroup label="Virginia">
														<option>Virginia Beach</option>
														<option>Norfolk</option>
														<option>Chesapeake</option>
														<option>Arlington</option>
														<option>Richmond</option> 
													</optgroup>	
													<optgroup label="Washington">
														<option>Seattle</option>
														<option>Spokane</option>
														<option>Tacoma</option>
														<option>Vancouver</option>
														<option>Bellevue</option> 
													</optgroup>	
													<optgroup label="West Virginia">
														<option>Charleston</option>
														<option>Huntington</option>
														<option>Parkersburg</option>
														<option>Morgantown</option>
														<option>Wheeling</option> 
													</optgroup>	
													<optgroup label="Wisconsin">
														<option>Milwaukee</option>
														<option>Madison</option>
														<option>Green Bay</option>
														<option>Kenosha</option>
														<option>Racine</option>
													</optgroup>
													<optgroup label="Wyoming">
														<option>Cheyenne</option>
														<option>Casper</option>
														<option>Laramie</option>
														<option>Gillette</option>
														<option>Rock Springs</option>
													</optgroup>	
											</select>
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
					<h1><a href="index.html"><span>Re</span>sale-v2</a></h1>
				</div>
				<div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="text" placeholder="How can we help you today?" required="" />
						<select id="agileinfo_search" name="agileinfo_search" required>
							<option value="">All Categories</option>
							<option value="Mobiles">Mobiles</option>
							<option value="Electronics & Appliances">Electronics & Appliances</option>
							<option value="Cars">Cars</option>
							<option value="Bikes">Bikes</option>
							<option value="Furnitures">Furnitures</option>
							<option value="Books, Sports & Hobbies">Books, Sports & Hobbies</option>
							<option value="Fashion">Fashion</option>
							<option value="Kids">Kids</option>
							<option value="Services">Services</option>
							<option value="Jobs">Jobs</option>
							<option value="Real Estates">Real Estates</option>
						</select>
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				<a class="post-w3layouts-ad" href="post-ad.html">Post Free Ad</a>
				</div>	
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	<!-- //header -->
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Categories</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Categories -->
	<!--Vertical Tab-->
	<div class="categories-section main-grid-border">
		<div class="container">
			<h2 class="w3-head">Emplois</h2>
			<div class="category-list">
				<div id="parentVerticalTab">
					<div class="agileits-tab_nav">
					<ul class="resp-tabs-list hor_1">
						<li>Achat,transport,Logistique</li>
						<li>Commercial,Ventes</li>
						<li>Gestions,comptabilites,finnances</li>
						<li>informatique,nouvelles technologies</li>
						<li>Magements,Direction générale</li>
						<li>Marketing,communication</li>
						<li>Metiers de la sante et du social</li>
						<li>Metiers des services</li>
						<li>Metiers BTP</li>
						<li>Production, maintenance et qualité</li>
						<li>Gestion de projets</li>
						<li>RH,juridique,formation</li>
						<li>secretariat artisanale</li>
						<li>Tourisme,hoteleries,restauration</li>
					</ul>
						<a class="w3ls-ads" href="all-classifieds.html">View all Ads</a>
					</div>
					<div class="resp-tabs-container hor_1" id="a1">
						<span class="active total" style="display:block;" data-toggle="modal" data-target="#myModal"><strong>Tous le CAMEROUN</strong> (Selectionner votre localiter)</span>
						<div>
						<!--<div class="container">-->
							<div class="category container">
								<div class="row" >
									<div class="col-md-6" style="border: 1px solid #DDCFCF">
										<a>Chauffeur PL et SPL</a>
										<p>17.01.2018 | N.C.
											Nous recherchons des Chauffeurs PL et SPL que nous transmettrons à nos clients dans le cadre de leurs futures campagnes de recrutement...
											Région de : Douala</p>
									</div>
								
								</div>
									<div class="category ">
									<div class="row">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Responsable de Département Logistique (H/F)</a>
												<p>16.01.2018 | ACTION CONTRE LA FAIM
												Missions :- Assurer la gestion de la logistique- Mettre en œuvre et garantir la performance de la chaîne d’approvisionnement- Mettre...
												Région de : Yaoundé</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>RESPONSABLE ACHATS REGION CEDEAO</a>
												<p>10.01.2018 | FED AFRICA

													Missions :1) Organisation et Management* Rédiger, mettre à jour et veiller au respect des process achats.* Manager et encadrer ses équipes...
													Région de : International</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>DIRECTEUR LOGISTIQUE</a>
												<p>10.01.2018 | FED AFRICA
													Missions :Commercial:Collecter les besoins pour l'élaboration du budget.Négocier les mises à disposition des produits.Veiller au...
													Région de : International</p>
										</div>
										
									</div>
										<div class="row" style="margin-top: 20px">
											<div class="col-md-6 " style="border: 1px solid #DDCFCF">
												<a>DIRECTEUR TECHNIQUE</a>
													<p>08.01.2018 | ACTION CONTRE LA FAIM
														Missions :Gérer la logistique de la capitale;Gestion des équipements selon le partage des tâches avec le Coordinateur Logistique;Encadrer l...
														Région de : Yaoundé</p>
										</div>
									</div>
									
									
								<!--<div class="category-info">
									<h4>Mobiles</h4>
									<span>5,12,850 Ads</span>
									<a href="all-classifieds.html">View all Ads</a>
								</div>-->
								<div class="clearfix"></div>
							</div>
						</div>
							<!--<div class="sub-categories">
								<ul>
									<li><a href="mobiles.html">mobile phones</a></li>
									<li><a href="mobiles.html">Tablets</a></li>
									<li><a href="mobiles.html">Accessories</a></li>
								</ul>
							</div>-->
						</div> <!--achat transport-->
						<div>
							<div class="category container">
								<div class="row">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Responsable de Département Logistique (H/F)</a>
												<p>16.01.2018 | ACTION CONTRE LA FAIM
												Missions :- Assurer la gestion de la logistique- Mettre en œuvre et garantir la performance de la chaîne d’approvisionnement- Mettre...
												Région de : Yaoundé</p>
										</div>
							  </div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>RESPONSABLE ACHATS REGION CEDEAO</a>
												<p>10.01.2018 | FED AFRICA

													Missions :1) Organisation et Management* Rédiger, mettre à jour et veiller au respect des process achats.* Manager et encadrer ses équipes...
													Région de : International</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>DIRECTEUR LOGISTIQUE</a>
												<p>10.01.2018 | FED AFRICA
													Missions :Commercial:Collecter les besoins pour l'élaboration du budget.Négocier les mises à disposition des produits.Veiller au...
													Région de : International</p>
										</div>
										
									</div>
										<div class="row" style="margin-top: 20px">
											<div class="col-md-6 " style="border: 1px solid #DDCFCF">
												<a>DIRECTEUR TECHNIQUE</a>
													<p>08.01.2018 | ACTION CONTRE LA FAIM
														Missions :Gérer la logistique de la capitale;Gestion des équipements selon le partage des tâches avec le Coordinateur Logistique;Encadrer l...
														Région de : Yaoundé</p>
										</div>
									</div>
								<!--<div class="category-info">
									<h4>Electronics & Appliances</h4>
									<span>2,01,850 Ads</span>
									<a href="all-classifieds.html">View all Ads</a>
								</div>-->
								<div class="clearfix"></div>
							</div>
							<!--<div class="sub-categories">
								<ul>
									<li><a href="electronics-appliances.html">Computers & accessories</a></li>
									<li><a href="electronics-appliances.html">Tv - video - audio</a></li>
									<li><a href="electronics-appliances.html">Cameras & accessories</a></li>
									<li><a href="electronics-appliances.html">Games & Entertainment</a></li>
									<li><a href="electronics-appliances.html">Fridge - AC - Washing Machine</a></li>
									<li><a href="electronics-appliances.html">Kitchen & Other Appliances</a></li>
								</ul>
							</div>-->
						</div> <!--commercial ventes-->
						<div>
							<div class="category container">				
									<div class="row">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Ingénieur Technico-Commercial</a>
												<p>Nous recrutons pour le compte de notre client qui opère dans le secteur de l'industrie des Ingénieurs Technico-Commerciaux.Nous...
													Région de : Douala</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Contrôleur de Gestion</a>
												<p>17.01.2018 | UNION CAMEROUNAISE DES BRASSERIES DU CAMEROUN -UCB
													Missions :Lead key marketing strategy projects including brand architecture, visual identity development and namingDevelop an 18 month, 24...
													Région de : Douala</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>REGIONAL SALES MANAGER</a>
												<p>17.01.2018 | UNION CAMEROUNAISE DES BRASSERIES DU CAMEROUN -UCB
												Missions :Business Development – You will be tasked with developing and growing new markets through active prospecting of...
												Région de : Douall</p>
										</div>
										
									</div>
										<div class="row" style="margin-top: 20px">
											<div class="col-md-6 " style="border: 1px solid #DDCFCF">
												<a>RESPONSABLE RH (H/F) – YAOUNDÉ</a>
													<p>Missions :Rattaché(e) à la Direction des RH, vous aurez pour principale mission la détermination des besoins en RH relatifs aux différentes...
													Région de : Yaoundé</p>
										</div>
									</div>
								
								<!--<div class="category-info">
									<h4>Cars</h4>
									<span>1,98,080 Ads</span>
									<a href="all-classifieds.html">View all Ads</a>
								</div>-->
								<div class="clearfix"></div>
							</div>
							<!--<div class="sub-categories">
								<ul>
									<li><a href="cars.html">Commercial Vehicles</a></li>
									<li><a href="cars.html">Other Vehicles</a></li>
									<li><a href="cars.html">Spare Parts</a></li>
								</ul>
							</div>-->
						</div> <!--gestioin comptabilites-->
						<div>
							<div class="category container">
								<div class="row">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Développeur Informatique Microsoft .NET (H/F)</a>
												<p>17.01.2018 | RH RECRUTEMENT
													Nous recherchons des profils / CVs des Développeurs Informatique Microsoft .NET (H/F) que nous transmettrons à nos clients dans le...
													Région de : Ebolowa</p>
										</div>
							  </div>
							  
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Full Stack Web Developer</a>
												<p>16.01.2018 | ETERNAL COMPANY LIMITED
													Missions :The general tasks assigned to this role consist in:• Designing the overall architecture of web applications.•...
													Région de : Douala</p>
										</div>
								</div>
									
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Consultant SAP Modules FI, CO, SD, MM, BI, CRM, HR (H/F)</a>
												<p>16.01.2018 | N.C.
													Nous recherchons des Consultants SAP Modules FI, CO, SD, MM, BI, CRM, HR (H/F) que nous transmettrons à nos clients dans le cadre de...
													Région de : Douala</p>
										</div>
										
									</div>
										<div class="row" style="margin-top: 20px">
											<div class="col-md-6 " style="border: 1px solid #DDCFCF">
												<a>Assistante Administrative</a>
													<p>15.01.2018 | ECONSULTING INTERNATIONAL
														Econsulting International recrute pour ses besoins une Assistante Administrative.En plus des connaissances dans le traitement administratif...
														Région de : Yaoundé</p>
										</div>
									</div>
								
								<!--<div class="category-info">
									<h4>Bikes</h4>
									<span>6,17,568 Ads</span>
									<a href="all-classifieds.html">View all Ads</a>
								</div>-->
								<div class="clearfix"></div>
							</div>
							<!--<div class="sub-categories">
								<ul>
									<li><a href="bikes.html">Motorcycles</a></li>
									<li><a href="bikes.html">Scooters</a></li>
									<li><a href="bikes.html">Bicycles</a></li>
									<li><a href="bikes.html">Spare Parts</a></li>
								</ul>
							</div>-->
							</div>
						</div> <!--informatique et nouvelle technologie-->
						<div>
							<div class="category container">
									<div class="row">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Brand Manager</a>
												<p>17.01.2018 | UNION CAMEROUNAISE DES BRASSERIES DU CAMEROUN -UCB
													Missions :Lead key marketing strategy projects including brand architecture, visual identity development and namingDevelop an 18 month, 24...
													Région de : Douala</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Coordinateur H/F Bureau Douala, Gestion de Programme</a>
												<p>17.01.2018 | PLAN CAMEROON
												Missions :Sous la supervision du Directeur du Programme social Plan/UNHCR,  le/la Coordonnateur/Coordonnatrice de bureau est Chargé(e...
												Région de : Douala</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>IFS COMPETENCY MANAGER</a>
												<p>12.01.2018 | ADRH APAVE
													Reporting to IT Director, the incumbent will be in charge of implementing IFS Applications 9 across Head Office in Europe and subsidiaries...
													Région de : Douala</p>
										</div>
										
									</div>
										<div class="row" style="margin-top: 20px">
											<div class="col-md-6 " style="border: 1px solid #DDCFCF">
												<a>Directeur d'Exploitation H/F</a>
													<p>12.01.2018 | ADRH APAVE
														Missions :Management industrielle et logistiqueConcevoir et organiser la chaîne logistiqueÉtudier la faisabilité de réalisation des...
														Région de : Douala</p>
										</div>
									</div>
								
								<!--<div class="category-info">
									<h4>Furniture</h4>
									<span>1,05,168 Ads</span>
									<a href="all-classifieds.html">View all Ads</a>
								</div>-->
								<div class="clearfix"></div>
							</div>
							<!--<div class="sub-categories">
								<ul>
									<li><a href="furnitures.html">Sofa & Dining</a></li>
									<li><a href="furnitures.html">Beds & Wardrobes</a></li>
									<li><a href="furnitures.html">Home Decor & Garden</a></li>
									<li><a href="furnitures.html">Other Household Items</a></li>
								</ul>
							</div>-->
						</div> <!--mangement,direction-->
						<div>
							<div class="category container">
									<div class="row">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Stagiaire Marketing et Communication - Douala</a>
												<p>17.01.2018 | VAIRIFIED
													Missions :Le stagiaire marketing et communication est en charge des missions suivantes :Développement du portefeuille client et...
													Région de : Douala</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>TECHNICIEN STAGIAIRE - AUDIOVISUELS - CADREUR / MONTEUR VIDÉOS</a>
												<p>16.01.2018 | DESANNE SAS
													Nous recrutons 02 Techniciens Stagiaires - Audiovisuels - Cadreurs / Monteurs Vidéos.Vous intégrez une équipe projet de taille humaine....
													Région de : Douala</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Hôtesse d'Accueil</a>
												<p>16.01.2018 | STAR AGENCY EVENTS
													Dans le but de constituer son équipe, STAR AGENCY EVENTS recherche des Hôtesses d'Accueil pour ses prestations auprès des clients...
													Région de : Yaoundé</p>
										</div>
									</div>
										<div class="row" style="margin-top: 20px">
											<div class="col-md-6 " style="border: 1px solid #DDCFCF">
												<a>Cadre Commercial</a>
													<p>15.01.2018 | SCI BLUE OCEAN PROPERTIES
													LA SCI BLUE OCEAN recrute des Cadres Commerciaux.Missions :Division ventes classiquesImplémenter et contrôler l’exécution de la...
													Région de : Douala - Yaoundé & International</p>
										</div>
									</div>
								
								<!--<div class="category-info">
									<h4>Pets</h4>
									<span>1,77,816 Ads</span>
									<a href="all-classifieds.html">View all Ads</a>
								</div>-->
								<div class="clearfix"></div>
							</div>
							<!--<div class="sub-categories">
								<ul>
									<li><a href="pets.html">Dogs</a></li>
									<li><a href="pets.html">Aquariums</a></li>
									<li><a href="pets.html">Pet Food & Accessories</a></li>
									<li><a href="pets.html">Other Pets</a></li>
								</ul>
							</div>-->
						</div> <!--maketing et communication -->
						<div>
							<div class="category container">
									<div class="row">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Projects Coordinator for the Cash Based Transfer, General Food</a>
												<p>17.01.2018 | PLAN CAMEROON
													This project will be implemented in the Far North region and East Region targeting about Refugees and IDPs respectively in Kousseri, Mora...
													Région de : Bertoua - Garoua & Ngaoundéré</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Project Coordinator for the Blanket Supplementary Feeding Program (BSF</a>
												<p>17.01.2018 | PLAN CAMEROON
												This project will be implemented with Blanket Supplementary Feeding Program (BSFP) in the Far North region targeting beneficiaries 6 to 23...
												Région de : Garoua & Ngaoundéré</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Account Assistant for the Cash Based Transfer, Multipurpose Cash B</a>
											<p>17.01.2018 | PLAN CAMEROON
												We recruit 04 Accounts Assistant for the Cash Based Transfer, Multipurpose Cash B.This project will be implemented in the Far North region...
												Région de : Bafoussam - Bamenda - Bertoua - Garoua & Ngaoundéré</p>
										</div>
										
									</div>
										<div class="row" style="margin-top: 20px">
											<div class="col-md-6 " style="border: 1px solid #DDCFCF">
												<a>Point Focal Secours Distribution</a>
													<p>15.01.2018 | COMITÉ INTERNATIONAL DE LA CROIX-ROUGE
														Missions :Représenter la Coordination Centrale auprès des autorités et partenaires dans sa zone de compétence ;Gérer à bon escient les...
														Région de : Maroua & Ngaoundéré</p>
										</div>
									</div>
								
								<!--<div class="category-info">
									<h4>Books, Sports & Hobbies</h4>
									<span>9,58,458 Ads</span>
									<a href="all-classifieds.html">View all Ads</a>
								</div>-->
								<div class="clearfix"></div>
							</div>
							<!--<div class="sub-categories">
								<ul>
									<li><a href="books-sports-hobbies.html">Books & Magazines</a></li>
									<li><a href="books-sports-hobbies.html">Musical Instruments</a></li>
									<li><a href="books-sports-hobbies.html">Sports Equipment</a></li>
									<li><a href="books-sports-hobbies.html">Gym & Fitness</a></li>
									<li><a href="books-sports-hobbies.html">Other Hobbies</a></li>
								</ul>
							</div>-->
						</div> <!--metiers de la sante et du social-->
						<div>
							<div class="category container">
									<div class="row">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Assistant des Programmes du Projet au sein des Unités des Programme</a>
												<p>17.01.2018 | PLAN CAMEROON
													Dans le cadre du Projet « Don de l’Espoir » financé par la Fondation Don de l’Espoir à travers Plan...
													Région de : Bamenda - Bertoua - Garoua & Ngaoundéré</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Assistant Protection et SGBV, Protection de l'Enfant</a>
												<p>17.01.2018 | PLAN CAMEROON
													Le titulaire travaillera en étroite collaboration avec les responsables de toutes les composantes du programme ainsi qu'avec les...
													Région de : Douala</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Responsable de la Communication</a>
												<p>17.01.2018 | NEW AFRICA PAYMENTS
													MissionAu sein de la Direction Marketing et Communication, vous aurez pour missions de/d’:Mettre en œuvre le plan de...
													Région de : Douala</p>
										</div>
										
									</div>
										<div class="row" style="margin-top: 20px">
											<div class="col-md-6 " style="border: 1px solid #DDCFCF">
												<a>Chargé d’Accueil (H/F)</a>
													<p>17.01.2018 | RH RECRUTEMENT
														Nous recherchons des profils / CVs des Chargés d’Accueil (H/F) que nous transmettrons à nos clients dans le cadre de leurs futures...
														Région de : Garoua</p>
										</div>
									</div>
								
								<!--<div class="category-info">
									<h4>Fashion</h4>
									<span>3,52,345 Ads</span>
									<a href="all-classifieds.html">View all Ads</a>
								</div>-->
								<div class="clearfix"></div>
							</div>
							<!--<div class="sub-categories">
								<ul>
									<li><a href="fashion.html">Clothes</a></li>
									<li><a href="fashion.html">Footwear</a></li>
									<li><a href="fashion.html">Accessories</a></li>
								</ul>
							</div>-->
						</div> <!--metiers des services -->
						<div>
							<div class="category container">
									<div class="row">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Opérateur / Opératrice de Saisie</a>
												<p>18.01.2018 | N.C.
													Nous recherchons des profils / CVs des Opérateurs / Opératrices de Saisie que nous transmettrons à nos clients dans le cadre de leurs...
													Région de : Garoua</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Métreur (H/F)</a>
												<p>16.01.2018 | N.C.
													Nous recherchons des profils / CVs des Métreurs (H/F) que nous transmettrons à nos clients dans le cadre de leurs futures campagnes de...
													Région de : Garoua</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Cadre Commercial</a>
												<p>15.01.2018 | SCI BLUE OCEAN PROPERTIES
													LA SCI BLUE OCEAN recrute des Cadres Commerciaux.Missions :Division ventes classiquesImplémenter et contrôler l’exécution de la...
													Région de : Douala - Yaoundé & International</p>
										</div>
										
									</div>
										<div class="row" style="margin-top: 20px">
											<div class="col-md-6 " style="border: 1px solid #DDCFCF">
												<a>Ingénieur Génie Civil du BTP</a>
													<p>15.01.2018 | LOGISTICS SARL
														ENTREPRISE : Logistics SarlPour le développement de notre entreprise, nous recherchons un/une (02) Ingénieurs Génie Civil du BTP/...
														Région de : Yaoundé</p>
											</div>
									</div>
								
								<!--<div class="category-info">
									<h4>Kids</h4>
									<span>8,45,298 Ads</span>
									<a href="all-classifieds.html">View all Ads</a>
								</div>-->
								<div class="clearfix"></div>
							</div>
							<!--<div class="sub-categories">
								<ul>
									<li><a href="kids.html">Furniture And Toys</a></li>
									<li><a href="kids.html">Prams & Walkers</a></li>
									<li><a href="kids.html">Accessories</a></li>
								</ul>
							</div>-->
						</div> <!--metiers BTP-->
						<div>
							<div class="category container">
									<div class="row">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Chef de quart</a>
												<p>17.01.2018 | ATLANTIC COCOA CORPORATION
													Une importante entreprise du milieu agroalimentaire, dans le cadre du développement de ses activités au Cameroun recrute : Quatre...
													Région de : Douala</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Ingénieur Technico-Commercial</a>
												<p>16.01.2018 | RH RECRUTEMENT
													Nous recherchons des profils / CVs des Ingénieurs Technico-Commerciaux que nous transmettrons à nos clients dans le cadre de leurs...
													Région de : Garoua</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Technicien Mécanique (H/F)</a>
												<p>12.01.2018 | N.C.
													Nous recherchons des profils / CVs des Techniciens Mécaniques (H/F) que nous transmettrons à nos clients dans le cadre de leurs...
													Région de : Garoua</p>
										</div>
										
									</div>
										<div class="row" style="margin-top: 20px">
											<div class="col-md-6 " style="border: 1px solid #DDCFCF">
												<a>COORDINATEUR QUALITÉ H/F – DOUALA</a>
													<p>10.01.2018 | MELT GROUP
														Missions :Rattaché(e) à la Direction des Opérations à Douala, vos principales missions porteront sur :Le maintien à jour du système...
														Région de : Douala</p>
										</div>
									</div>
								
								<!--<div class="category-info">
									<h4>Services</h4>
									<span>7,58,867 Ads</span>
									<a href="all-classifieds.html">View all Ads</a>
								</div>-->
								<div class="clearfix"></div>
							</div>
							<!--<div class="sub-categories">
								<ul>
									<li><a href="services.html">Education & Classes</a></li>
									<li><a href="services.html">Web Development</a></li>
									<li><a href="services.html">Electronics & Computer Repair</a></li>
									<li><a href="services.html">Maids & Domestic Help</a></li>
									<li><a href="services.html">Health & Beauty</a></li>
									<li><a href="services.html">Movers & Packers</a></li>
									<li><a href="services.html">Drivers & Taxi</a></li>
									<li><a href="services.html">Event Services</a></li>
									<li><a href="services.html">Other Services</a></li>
								</ul>
							</div>-->
						</div> <!--production maintenance-->
						<div>
							<div class="category container">
									<div class="row">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Chargé / Chargée de Suivi et Évaluation</a>
												<p>13.12.2017 | DANISH REFUGEE COUNCIL
												Le Conseil Danois pour les Réfugiés (DRC) est une organisation privée, indépendante, à but non lucratif fondée en 1956 par un consortium de...
												Région de : Ngaoundéré</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>POINT FOCAL SÉCURITÉ</a>
												<p>13.12.2017 | DANISH REFUGEE COUNCIL
													Missions :Conduit l’analyse de risques de l’environnement opérationnel, et diffuse les alertes « Sécurité » aux...
													Région de : Ngaoundéré</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Project Coordinator for the Blanket Supplementary Feeding Program (BSF</a>
												<p>17.01.2018 | PLAN CAMEROON
													This project will be implemented with Blanket Supplementary Feeding Program (BSFP) in the Far North region targeting beneficiaries 6 to 23...
													Région de : Garoua & Ngaoundéré</p>
										</div>
										
									</div>
										<div class="row" style="margin-top: 20px">
											<div class="col-md-6 " style="border: 1px solid #DDCFCF">
												<a>Coordinateur H/F Bureau Douala, Gestion de Programme</a>
													<p>17.01.2018 | PLAN CAMEROON
														Missions :Sous la supervision du Directeur du Programme social Plan/UNHCR,  le/la Coordonnateur/Coordonnatrice de bureau est Chargé(e...
														Région de : Douala</p>
										</div>
									</div>
								
								<!--<div class="category-info">
									<h4>Jobs</h4>
									<span>5,74,547 Ads</span>
									<a href="all-classifieds.html">View all Ads</a>
								</div>-->
								<div class="clearfix"></div>
							</div>
							<!--<div class="sub-categories">
								<ul>
									<li><a href="jobs.html">Customer Service</a></li>
									<li><a href="jobs.html">IT</a></li>
									<li><a href="jobs.html">Online</a></li>
									<li><a href="jobs.html">Marketing</a></li>
									<li><a href="jobs.html">Advertising & PR</a></li>
									<li><a href="jobs.html">Sales</a></li>
									<li><a href="jobs.html">Clerical & Administration</a></li>
									<li><a href="jobs.html">Human Resources</a></li>
									<li><a href="jobs.html">Education</a></li>
									<li><a href="jobs.html">Hotels & Tourism</a></li>
									<li><a href="jobs.html">Accounting & Finance</a></li>
									<li><a href="jobs.html">Manufacturing</a></li>
									<li><a href="jobs.html">Part - Time</a></li>
									<li><a href="jobs.html">Other Jobs</a></li>
								</ul>
							</div>-->
						</div>  <!--gestion des project-->
						<div>
							<div class="category container">	
									<div class="row">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Moniteur Programme – Protection</a>
												<p>05.12.2017 | DANISH REFUGEE COUNCIL
													Missions :Sous la supervision directe du superviseur de protection, les moniteurs de protection sont chargés de la mise en œuvre directe du...
													Région de : Ngaoundéré</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>RESPONSABLE RH (H/F) – YAOUNDÉ</a>
												<p>17.01.2018 | MELT GROUP
													Missions :Rattaché(e) à la Direction des RH, vous aurez pour principale mission la détermination des besoins en RH relatifs aux différentes...
													Région de : Yaoundé</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Enseignant Expérimenté d'anglais professionnel</a>
												<p>16.01.2018 | NOCEA GROUP
													Nous recrutons des Enseignants Expérimentés d'anglais professionnel (préparation au TOEFL, Etc. et d'allemand préparation ZDAF...
													Région de : Yaoundé</p>
										</div>
										
									</div>
										<div class="row" style="margin-top: 20px">
											<div class="col-md-6 " style="border: 1px solid #DDCFCF">
												<a>Enseignant d'Anglais et d'Allemand</a>
													<p>15.01.2018 | NOCEA GROUP
														Nous recrutons des Enseignants d'Anglais et d'Allemand. 
														Région de : Yaoundé</p>
											</div>
									</div>
								
								<!--<div class="category-info">
									<h4>Real Estate</h4>
									<span>98,156 Ads</span>
									<a href="all-classifieds.html">View all Ads</a>
								</div>-->
								<div class="clearfix"></div>
							</div>
							<!--<div class="sub-categories">
								<ul>
									<li><a href="real-estate.html">Houses</a></li>
									<li><a href="real-estate.html">Apartments</a></li>
									<li><a href="real-estate.html">PG & Roommates</a></li>
									<li><a href="real-estate.html">Land & Plots</a></li>
									<li><a href="real-estate.html">Shops - Offices - Commercial Space</a></li>
									<li><a href="real-estate.html">Vacation Rentals - Guest Houses</a></li>
								</ul>
							</div>-->
						</div> <!--RH,juridictioin-->
						<div>
							<div class="category container">	
									<div class="row">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Opérateur / Opératrice de Saisie</a>
												<p>18.01.2018 | N.C.
													Nous recherchons des profils / CVs des Opérateurs / Opératrices de Saisie que nous transmettrons à nos clients dans le cadre de leurs...
													Région de : Garoua</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Assistant des Programmes du Projet au sein des Unités des Programme</a>
												<p>17.01.2018 | PLAN CAMEROON
													Dans le cadre du Projet « Don de l’Espoir » financé par la Fondation Don de l’Espoir à travers Plan...
													Région de : Bamenda - Bertoua - Garoua & Ngaoundéré</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Assistant Protection et SGBV, Protection de l'Enfant</a>
												<p>17.01.2018 | PLAN CAMEROON
													Le titulaire travaillera en étroite collaboration avec les responsables de toutes les composantes du programme ainsi qu'avec les...
													Région de : Douala</p>
										</div>
										
									</div>
										<div class="row" style="margin-top: 20px">
											<div class="col-md-6 " style="border: 1px solid #DDCFCF">
												<a>Chargé d’Accueil (H/F)</a>
													<p>17.01.2018 | RH RECRUTEMENT
														Nous recherchons des profils / CVs des Chargés d’Accueil (H/F) que nous transmettrons à nos clients dans le cadre de leurs futures...
														Région de : Garoua</p>
										</div>
									</div>
								
								<!--<div class="category-info">
									<h4>Real Estate</h4>
									<span>98,156 Ads</span>
									<a href="all-classifieds.html">View all Ads</a>
								</div>-->
								<div class="clearfix"></div>
							</div> <!-- secretariat artisanal-->
							<!--<div class="sub-categories">
								<ul>
									<li><a href="real-estate.html">Houses</a></li>
									<li><a href="real-estate.html">Apartments</a></li>
									<li><a href="real-estate.html">PG & Roommates</a></li>
									<li><a href="real-estate.html">Land & Plots</a></li>
									<li><a href="real-estate.html">Shops - Offices - Commercial Space</a></li>
									<li><a href="real-estate.html">Vacation Rentals - Guest Houses</a></li>
								</ul>
							</div>-->
						</div>  <!-- secretariat artisanal-->
						<div>
							<div class="category container">	
									<div class="row">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Technicien Polyvalent (Ménage, Cuisine, Repassage) H/F</a>
												<p>05.01.2018 | SHLIFE SAS
													Missions :Entretien habituel d’un local classiquePrendre en compte les consignes de l’employeurLe respect des normes d’...
													Région de : Yaoundé</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Menagère/ Bali</a>
												<p>29.12.2017 | MAYE | SELF-EMPLOYMENT
													Savoir faire le menagemaitrise de la cuisine africaine et occidentaleBonne gestion du budget de la ration alimentaireBonne gouvernante
													Région de : Douala</p>
										</div>
									</div>
									<div class="row" style="margin-top: 20px">
										<div class="col-md-6 " style="border: 1px solid #DDCFCF">
											<a>Directeur / Directrice d'Hôtel</a>
												<p>27.12.2017 | RH RECRUTEMENT
													Nous recherchons des profils / CVs des Directeurs / Directrices d'Hôtel que nous transmettrons à nos clients dans le cadre de...
													Région de : Douala</p>
										</div>
										
									</div>
										<div class="row" style="margin-top: 20px">
											<div class="col-md-6 " style="border: 1px solid #DDCFCF">
												<a>Réceptionniste Structure d’Hébergement</a>
													<p>22.12.2017 | SOREPCO
													Missions :- Assurer l'accueil des clients à l'hôtel tout au long du séjour et leur fournir toute information nécessaire au bon...
													Région de : Douala</p>
										</div>
									</div>
								
								<!--<div class="category-info">
									<h4>Real Estate</h4>
									<span>98,156 Ads</span>
									<a href="all-classifieds.html">View all Ads</a>
								</div>-->
								<div class="clearfix"></div>
							</div> <!-- secretariat artisanal-->
							<!--<div class="sub-categories">
								<ul>
									<li><a href="real-estate.html">Houses</a></li>
									<li><a href="real-estate.html">Apartments</a></li>
									<li><a href="real-estate.html">PG & Roommates</a></li>
									<li><a href="real-estate.html">Land & Plots</a></li>
									<li><a href="real-estate.html">Shops - Offices - Commercial Space</a></li>
									<li><a href="real-estate.html">Vacation Rentals - Guest Houses</a></li>
								</ul>
							</div>-->
						</div> <!--tourisme et hotelerie-->
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
</body>
</html>