<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | Popular-Search :: w3layouts</title>
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
											<select id="basic2" class="show-tick form-control" multiple>
												<optgroup label="Popular Cities">
													<option selected style="display:none;color:#eee;">Select City</option>
													<option>Birmingham</option>
													<option>Anchorage</option>
													<option>Phoenix</option>
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
													<option>Indianapolis</option>
												</optgroup>
												<optgroup label="More Cities">
													<optgroup label="Alabama">
														<option>Birmingham</option>
														<option>Montgomery</option>
														<option>Mobile</option>
														<option>Huntsville</option>
														<option>Tuscaloosa</option>
													</optgroup>
													<optgroup label="Alaska">
														<option>Anchorage</option>
														<option>Fairbanks</option>
														<option>Juneau</option>
														<option>Sitka</option>
														<option>Ketchikan</option>
													</optgroup>
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
					<h1><a href="index.php"><span>Re</span>sale-v2</a></h1>
				</div>
				<div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="text" placeholder="How can we help you today?" required=" ">
						<select id="agileinfo_search" name="agileinfo_search" required="">
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
			<span class="agile-breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <span>Popular Search</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Popular-search -->
	<div class="popular-search main-grid-border">
		<div class="container">
			<h2 class="w3-head">Most popular search phrases</h2>
				<div class="tags">
					<p>
					<a class="tag1" href="single.php">At vero eos</a>
					<a class="tag2" href="single.php">doloremque</a>
					<a class="tag3" href="single.php">On the other</a>
					<a class="tag4" href="single.php">pain was</a>
					<a class="tag5" href="single.php">rationally encounter</a>
					<a class="tag6" href="single.php">praesentium voluptatum</a>
					<a class="tag7" href="single.php">est, omnis</a>
					<a class="tag8" href="single.php">who are so beguiled</a>
					<a class="tag9" href="single.php">when nothing</a>
					<a class="tag10" href="single.php">owing to the</a>
					<a class="tag11" href="single.php">pains to avoid</a>
					<a class="tag12" href="single.php">tempora incidunt</a>
					<a class="tag13" href="single.php">pursues or desires</a>
					<a class="tag14" href="single.php">Bonorum et</a>
					<a class="tag15" href="single.php">written by Cicero</a>
					<a class="tag16" href="single.php">Ipsum passage</a>
					<a class="tag17" href="single.php">exercitationem ullam</a>
					<a class="tag18" href="single.php">mistaken idea</a>
					<a class="tag19" href="single.php">ducimus qui</a>
					<a class="tag20" href="single.php">holds in these</a>
					</p>
				</div>
		</div>
		<div class="popular-regions">
			<div class="container">
				<h4>Regions</h4>
				<ul>
					<li><a href="regions.php">Alabama</a></li>
					<li><a href="regions.php">Alaska</a></li>
					<li><a href="regions.php">Arizona</a></li>
					<li><a href="regions.php">Arkansas</a></li>
					<li><a href="regions.php">California</a></li>
					<li><a href="regions.php">Colorado</a></li>
					<li><a href="regions.php">Connecticut</a></li>
					<li><a href="regions.php">Delaware</a></li>
					<li><a href="regions.php">Florida</a></li>
					<li><a href="regions.php">Georgia</a></li>
					<li><a href="regions.php">Hawaii</a></li>
					<li><a href="regions.php">Idaho</a></li>
					<li><a href="regions.php">Illinois</a></li>
					<li><a href="regions.php">Indiana</a></li>
					<li><a href="regions.php">Iowa</a></li>
					<li><a href="regions.php">Kansas</a></li>
					<li><a href="regions.php">Kentucky</a></li>
					<li><a href="regions.php">Louisiana</a></li>
					<li><a href="regions.php">Maine</a></li>
					<li><a href="regions.php">Maryland</a></li>
					<li><a href="regions.php">Massachusetts</a></li>
					<li><a href="regions.php">Michigan</a></li>
					<li><a href="regions.php">Minnesota</a></li>
					<li><a href="regions.php">Mississippi</a></li>
					<li><a href="regions.php">Missouri</a></li>
					<li><a href="regions.php">Montana</a></li>
					<li><a href="regions.php">Nebraska</a></li>
					<li><a href="regions.php">Nevada</a></li>
					<li><a href="regions.php">New Hampshire</a></li>
					<li><a href="regions.php">New Jersey</a></li>
					<li><a href="regions.php#">New Mexico</a></li>
					<li><a href="regions.php">New York</a></li>
					<li><a href="regions.php">North Carolina</a></li>
					<li><a href="regions.php">North Dakota</a></li>
					<li><a href="regions.php">Ohio</a></li>
					<li><a href="regions.php">Oklahoma</a></li>
					<li><a href="regions.php">Oregon</a></li>
					<li><a href="regions.php">Pennsylvania</a></li>
					<li><a href="regions.php">Rhode Island</a></li>
					<li><a href="regions.php">South Carolina</a></li>
					<li><a href="regions.php">South Dakota</a></li>
					<li><a href="regions.php">Tennessee</a></li>
					<li><a href="regions.php">Texas</a></li>
					<li><a href="regions.php">Utah</a></li>
					<li><a href="regions.php">Vermont</a></li>
					<li><a href="regions.php">Virginia</a></li>
					<li><a href="regions.php">Washington</a></li>
					<li><a href="regions.php">West Virginia</a></li>
					<li><a href="regions.php">Wisconsin</a></li>
					<li><a href="regions.php">Wyoming</a></li>
					<div class="clearfix"></div>
				</ul>
				<h4 class="mpcwc">Most popular cities in whole country</h4>
				<ul>
					<li><a href="all-classifieds.php">Birmingham</a></li>
					<li><a href="all-classifieds.php">Anchorage</a></li>
					<li><a href="all-classifieds.php">Phoenix</a></li>
					<li><a href="all-classifieds.php">Little Rock</a></li>
					<li><a href="all-classifieds.php">Los Angeles</a></li>
					<li><a href="all-classifieds.php">Denver</a></li>
					<li><a href="all-classifieds.php">Bridgeport</a></li>
					<li><a href="all-classifieds.php">Wilmington</a></li>
					<li><a href="all-classifieds.php">Jacksonville</a></li>
					<li><a href="all-classifieds.php">Atlanta</a></li>
					<li><a href="all-classifieds.php">Honolulu</a></li>
					<li><a href="all-classifieds.php">Boise</a></li>
					<li><a href="all-classifieds.php">Chicago</a></li>
					<li><a href="all-classifieds.php">Indianapolis</a></li>
					<div class="clearfix"></div>
				</ul>
			</div>
		</div>
		<div class="popular-categories">
			<div class="container">
				<div class="popular-category">
					<h4>Mobiles</h4>
					<ul>
						<li><a href="mobiles.php">Iphone</a></li>
						<li><a href="mobiles.php">Samsung</a></li>
						<li><a href="mobiles.php">Iphone 6</a></li>
						<li><a href="mobiles.php">Iphone 5s</a></li>
						<li><a href="mobiles.php">Exchange</a></li>
						<li><a href="mobiles.php">Nokia</a></li>
						<li><a href="mobiles.php">Sony</a></li>
						<li><a href="mobiles.php">Htc</a></li>
						<li><a href="mobiles.php">I phone</a></li>
						<li><a href="mobiles.php">Iphone 5</a></li>
						<li><a href="mobiles.php">Blackberry</a></li>
						<li><a href="mobiles.php">Cdma</a></li>
						<li><a href="mobiles.php">Micromax</a></li>
						<li><a href="mobiles.php">Iphone 4s</a></li>
						<li><a href="mobiles.php">Lenovo</a></li>
						<li><a href="mobiles.php">Apple</a></li>
						<li><a href="mobiles.php">Mi</a></li>
						<li><a href="mobiles.php">I phone 6</a></li>
						<li><a href="mobiles.php">I phone 5s</a></li>
						<li><a href="mobiles.php">Moto</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Electronics & Appliances</h4>
					<ul>
						<li><a href="electronics-appliances.php">Laptop</a></li>
						<li><a href="electronics-appliances.php">Dj</a></li>
						<li><a href="electronics-appliances.php">Tv</a></li>
						<li><a href="electronics-appliances.php">Projector</a></li>
						<li><a href="electronics-appliances.php">Led tv</a></li>
						<li><a href="electronics-appliances.php">Speakers</a></li>
						<li><a href="electronics-appliances.php">Home theater</a></li>
						<li><a href="electronics-appliances.php">Laptops</a></li>
						<li><a href="electronics-appliances.php">Printer</a></li>
						<li><a href="electronics-appliances.php">Speaker</a></li>
						<li><a href="electronics-appliances.php">Led</a></li>
						<li><a href="electronics-appliances.php">Amplifier</a></li>
						<li><a href="electronics-appliances.php">Generator</a></li>
						<li><a href="electronics-appliances.php">Music system</a></li>
						<li><a href="electronics-appliances.php">Washing machine</a></li>
						<li><a href="electronics-appliances.php">Camera</a></li>
						<li><a href="electronics-appliances.php">Sony</a></li>
						<li><a href="electronics-appliances.php">Fridge</a></li>
						<li><a href="electronics-appliances.php">Cpu</a></li>
						<li><a href="electronics-appliances.php">Ac</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Cars</h4>
					<ul>
						<li><a href="cars.php">Innova</a></li>
						<li><a href="cars.php">Scorpio</a></li>
						<li><a href="cars.php">Jeep</a></li>
						<li><a href="cars.php">Alto</a></li>
						<li><a href="cars.php">Maruti 800</a></li>
						<li><a href="cars.php">Bolero</a></li>
						<li><a href="cars.php">Zen</a></li>
						<li><a href="cars.php">Honda city</a></li>
						<li><a href="cars.php">Delhi</a></li>
						<li><a href="cars.php">Omni</a></li>
						<li><a href="cars.php">Tavera</a></li>
						<li><a href="cars.php">Indica</a></li>
						<li><a href="cars.php">Santro</a></li>
						<li><a href="cars.php">Bmw</a></li>
						<li><a href="cars.php">Mumbai</a></li>
						<li><a href="cars.php">Tata sumo</a></li>
						<li><a href="cars.php">Kerala</a></li>
						<li><a href="cars.php">Swift vdi</a></li>
						<li><a href="cars.php">Fortuner</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Bikes</h4>
					<ul>
						<li><a href="bikes.php">Bullet</a></li>
						<li><a href="bikes.php">Royal enfield</a></li>
						<li><a href="bikes.php">R15</a></li>
						<li><a href="bikes.php">Fz</a></li>
						<li><a href="bikes.php">Activa</a></li>
						<li><a href="bikes.php">Pulsar</a></li>
						<li><a href="bikes.php">Yamaha</a></li>
						<li><a href="bikes.php">Mumbai</a></li>
						<li><a href="bikes.php">Ktm</a></li>
						<li><a href="bikes.php">Pulsar 220</a></li>
						<li><a href="bikes.php">Bangalore</a></li>
						<li><a href="bikes.php">Rx</a></li>
						<li><a href="bikes.php">Pune</a></li>
						<li><a href="bikes.php">Apache</a></li>
						<li><a href="bikes.php">Harley davidson</a></li>
						<li><a href="bikes.php">Delhi</a></li>
						<li><a href="bikes.php">Kolkata</a></li>
						<li><a href="bikes.php">Hyderabad</a></li>
						<li><a href="bikes.php">Karizma</a></li>
						<li><a href="bikes.php">Unicorn</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Furniture</h4>
					<ul>
						<li><a href="furnitures.php">Sofa</a></li>
						<li><a href="furnitures.php">Bed</a></li>
						<li><a href="furnitures.php">Dining table</a></li>
						<li><a href="furnitures.php">Sofa set</a></li>
						<li><a href="furnitures.php">Almirah</a></li>
						<li><a href="furnitures.php">Table</a></li>
						<li><a href="furnitures.php">Sofa cum bed</a></li>
						<li><a href="furnitures.php">Chair</a></li>
						<li><a href="furnitures.php">Double bed</a></li>
						<li><a href="furnitures.php">Computer table</a></li>
						<li><a href="furnitures.php">Antique</a></li>
						<li><a href="furnitures.php">Chairs</a></li>
						<li><a href="furnitures.php">Study table</a></li>
						<li><a href="furnitures.php">Office table</a></li>
						<li><a href="furnitures.php">Dressing table</a></li>
						<li><a href="furnitures.php">Tv stand</a></li>
						<li><a href="furnitures.php">Mumbai</a></li>
						<li><a href="furnitures.php">Wardrobe</a></li>
						<li><a href="furnitures.php">Cupboard</a></li>
						<li><a href="furnitures.php">Pune</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Pets</h4>
					<ul>
						<li><a href="pets.php">Cow</a></li>
						<li><a href="pets.php">Cows</a></li>
						<li><a href="pets.php">Goat</a></li>
						<li><a href="pets.php">Cat</a></li>
						<li><a href="pets.php">Aseel</a></li>
						<li><a href="pets.php">Horse</a></li>
						<li><a href="pets.php">Pigeons</a></li>
						<li><a href="pets.php">Pigeon</a></li>
						<li><a href="pets.php">Goats</a></li>
						<li><a href="pets.php">Cats</a></li>
						<li><a href="pets.php">Birds</a></li>
						<li><a href="pets.php">Rottweiler</a></li>
						<li><a href="pets.php">Rabbit</a></li>
						<li><a href="pets.php">Pug</a></li>
						<li><a href="pets.php">Pitbull</a></li>
						<li><a href="pets.php">German shepherd</a></li>
						<li><a href="pets.php">Buffalo</a></li>
						<li><a href="pets.php">Labrador</a></li>
						<li><a href="pets.php">Dog</a></li>
						<li><a href="pets.php">Hens</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Books, Sports & Hobbies</h4>
					<ul>
						<li><a href="books-sports-hobbies.php">Coin</a></li>
						<li><a href="books-sports-hobbies.php">Books</a></li>
						<li><a href="books-sports-hobbies.php">Bat</a></li>
						<li><a href="books-sports-hobbies.php">Football</a></li>
						<li><a href="books-sports-hobbies.php">Treadmill</a></li>
						<li><a href="books-sports-hobbies.php">Guitar</a></li>
						<li><a href="books-sports-hobbies.php">Coins</a></li>
						<li><a href="books-sports-hobbies.php">Moradabad</a></li>
						<li><a href="books-sports-hobbies.php">Cycle</a></li>
						<li><a href="books-sports-hobbies.php">Antique</a></li>
						<li><a href="books-sports-hobbies.php">Gym</a></li>
						<li><a href="books-sports-hobbies.php">Carrom board</a></li>
						<li><a href="books-sports-hobbies.php">Book</a></li>
						<li><a href="books-sports-hobbies.php">Shoes</a></li>
						<li><a href="books-sports-hobbies.php">Cricket bat</a></li>
						<li><a href="books-sports-hobbies.php">Sport</a></li>
						<li><a href="books-sports-hobbies.php">East india</a></li>
						<li><a href="books-sports-hobbies.php">Skates</a></li>
						<li><a href="books-sports-hobbies.php">Cricket bats</a></li>
						<li><a href="books-sports-hobbies.php">Sports</a></li>
					</ul>
				</div>	
				<div class="popular-category">
					<h4>Fashion</h4>
					<ul>
						<li><a href="fashion.php">Watch</a></li>
						<li><a href="fashion.php">Watches</a></li>
						<li><a href="fashion.php">Mumbai</a></li>
						<li><a href="fashion.php">Shoes</a></li>
						<li><a href="fashion.php">Jewellery</a></li>
						<li><a href="fashion.php">Bag</a></li>
						<li><a href="fashion.php">Saree</a></li>
						<li><a href="fashion.php">Jacket</a></li>
						<li><a href="fashion.php">Hyderabad</a></li>
						<li><a href="fashion.php">Kolkata</a></li>
						<li><a href="fashion.php">Kerala</a></li>
						<li><a href="fashion.php">Delhi</a></li>
						<li><a href="fashion.php">Bra</a></li>
						<li><a href="fashion.php">Bags</a></li>
						<li><a href="fashion.php">Ahmedabad</a></li>
						<li><a href="fashion.php">Bangalore</a></li>
						<li><a href="fashion.php">Sarees</a></li>
						<li><a href="fashion.php">Sunglasses</a></li>
						<li><a href="fashion.php">Gold</a></li>
						<li><a href="fashion.php">Nike</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Kids</h4>
					<ul>
						<li><a href="kids.php">Car</a></li>
						<li><a href="kids.php">Cycle</a></li>
						<li><a href="kids.php">Mumbai</a></li>
						<li><a href="kids.php">Toys</a></li>
						<li><a href="kids.php">Bike</a></li>
						<li><a href="kids.php">High chair</a></li>
						<li><a href="kids.php">Delhi</a></li>
						<li><a href="kids.php">Cycles</a></li>
						<li><a href="kids.php">Pune</a></li>
						<li><a href="kids.php">Stroller</a></li>
						<li><a href="kids.php">Hyderabad</a></li>
						<li><a href="kids.php">Cars</a></li>
						<li><a href="kids.php">Walker</a></li>
						<li><a href="kids.php">Tricycle</a></li>
						<li><a href="kids.php">Baby walker</a></li>
						<li><a href="kids.php">Car seat</a></li>
						<li><a href="kids.php">Cradle</a></li>
						<li><a href="kids.php">Kids cycle</a></li>
						<li><a href="kids.php">Kolkata baby</a></li>
						<li><a href="kids.php">Battery car</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Services</h4>
					<ul>
						<li><a href="services.php">Vip numbers</a></li>
						<li><a href="services.php">Fancy number</a></li>
						<li><a href="services.php">Insurance</a></li>
						<li><a href="services.php">Rent a car</a></li>
						<li><a href="services.php">Massage</a></li>
						<li><a href="services.php">Driver</a></li>
						<li><a href="services.php">Fancy numbers</a></li>
						<li><a href="services.php">Service</a></li>
						<li><a href="services.php">Vip number</a></li>
						<li><a href="services.php">Business</a></li>
						<li><a href="services.php">Loans</a></li>
						<li><a href="services.php">Cook</a></li>
						<li><a href="services.php">Distributors</a></li>
						<li><a href="services.php">Travel</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="services.php">Pop up calls</a></li>
						<li><a href="services.php">Icloud</a></li>
						<li><a href="services.php">Visa</a></li>
						<li><a href="services.php">Kerala rent car</a></li>
						<li><a href="services.php">Partners</a></li>
					</ul>
				</div>	
				<div class="popular-category">
					<h4>Jobs</h4>
					<ul>
						<li><a href="jobs.php">Driver</a></li>
						<li><a href="jobs.php">Fresher</a></li>
						<li><a href="jobs.php">Driver job</a></li>
						<li><a href="jobs.php">Delivery boy</a></li>
						<li><a href="jobs.php">Kolkata</a></li>
						<li><a href="jobs.php">Part time</a></li>
						<li><a href="jobs.php">Teacher</a></li>
						<li><a href="jobs.php">Driver jobs</a></li>
						<li><a href="jobs.php">Office boy</a></li>
						<li><a href="jobs.php">Data entry</a></li>
						<li><a href="jobs.php">Delhi</a></li>
						<li><a href="jobs.php">Computer operator</a></li>
						<li><a href="jobs.php">Data entry</a></li>
						<li><a href="jobs.php">Graphic designer</a></li>
						<li><a href="jobs.php">Receptionist</a></li>
						<li><a href="jobs.php">Mumbai</a></li>
						<li><a href="jobs.php">Part time job</a></li>
						<li><a href="jobs.php">Work from home</a></li>
						<li><a href="jobs.php">Accounting finance</a></li>
						<li><a href="jobs.php">Cook</a></li>
						<li><a href="jobs.php">Airport	</a></li>
					</ul>
				</div>	
				<div class="popular-category">
					<h4>Real Estate</h4>
					<ul>
						<li><a href="real-estate.php">House for sale</a></li>
						<li><a href="real-estate.php">Rent</a></li>
						<li><a href="real-estate.php">Wayanad</a></li>
						<li><a href="real-estate.php">Thodupuzha</a></li>
						<li><a href="real-estate.php">Kothamangalam</a></li>
						<li><a href="real-estate.php">Muvattupuzha</a></li>
						<li><a href="real-estate.php">Pala</a></li>
						<li><a href="real-estate.php">Sale</a></li>
						<li><a href="real-estate.php">Agriculture land</a></li>
						<li><a href="real-estate.php">House for rent</a></li>
						<li><a href="real-estate.php">Irinjalakuda</a></li>
						<li><a href="real-estate.php">Kottayam</a></li>
						<li><a href="real-estate.php">Powai</a></li>
						<li><a href="real-estate.php">Changanacherry</a></li>
						<li><a href="real-estate.php">Aluva</a></li>
						<li><a href="real-estate.php">Shop</a></li>
						<li><a href="real-estate.php">Land</a></li>
						<li><a href="real-estate.php">House</a></li>
						<li><a href="real-estate.php">Hyderabad</a></li>
						<li><a href="real-estate.php">Pathanamthitta</a></li>
					</ul>
				</div>					
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //Popular-search -->
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
								<li><a href="howitworks.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>How it Works</a></li>						
								<li><a href="sitemap.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Sitemap</a></li>
								<li><a href="faq.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Faq</a></li>
								<li><a href="feedback.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Feedback</a></li>
								<li><a href="contact.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact</a></li>
								<li><a href="typography.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Short codes</a></li>
								<li><a href="icons.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Icons Page</a></li>
							</ul>
						</div>
						<div class="col-md-3 wthree-footer-grid">
							<h4 class="footer-head">Information</h4>
							<ul>
								<li><a href="regions.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Locations Map</a></li>	
								<li><a href="terms.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Terms of Use</a></li>
								<li><a href="popular-search.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Popular searches</a></li>	
								<li><a href="privacy.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Privacy Policy</a></li>	
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
					<h1><a href="index.php"><span>Re</span>sale-v2</a></h1>
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
</body>
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
</html>