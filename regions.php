<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | Regions :: w3layouts</title>
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
			<span class="agile-breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <span>Regions</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Regions -->
	<div class="regions main-grid-border">
		<div class="container">
			<h2 class="w3-head">Location List</h2>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Alabama </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Birmingham </a></li>
						<li><a href="all-classifieds.php"> Montgomery </a></li>
						<li><a href="all-classifieds.php"> Mobile </a></li>
						<li><a href="all-classifieds.php"> Huntsville </a></li>
						<li><a href="all-classifieds.php"> Tuscaloosa </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Alaska </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Anchorage</a></li>
						<li><a href="all-classifieds.php">Fairbanks</a></li>
						<li><a href="all-classifieds.php">Juneau</a></li>
						<li><a href="all-classifieds.php">Sitka</a></li>
						<li><a href="all-classifieds.php">Ketchikan</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Arizona </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Phoenix </a></li>
						<li><a href="all-classifieds.php">Tucson   </a></li>
						<li><a href="all-classifieds.php">Mesa   </a></li>
						<li><a href="all-classifieds.php">Chandler  </a></li>
						<li><a href="all-classifieds.php">Glendale </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Arkansas </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Little Rock  </a></li>
						<li><a href="all-classifieds.php">Fort Smith    </a></li>
						<li><a href="all-classifieds.php">Fayetteville   </a></li>
						<li><a href="all-classifieds.php">Springdale    </a></li>
						<li><a href="all-classifieds.php">Jonesboro   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>California </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Los Angeles  </a></li>
						<li><a href="all-classifieds.php">San Diego    </a></li>
						<li><a href="all-classifieds.php">San Jose</a></li>
						<li><a href="all-classifieds.php">San Francisco</a></li>
						<li><a href="all-classifieds.php">Fresno</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Colorado </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Denver   </a></li>
						<li><a href="all-classifieds.php">Colorado   </a></li>
						<li><a href="all-classifieds.php">Aurora   </a></li>
						<li><a href="all-classifieds.php">Fort Collins  </a></li>
						<li><a href="all-classifieds.php">Lakewood  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Connecticut </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Bridgeport </a></li>
						<li><a href="all-classifieds.php">New Haven  </a></li>
						<li><a href="all-classifieds.php">Hartford  </a></li>
						<li><a href="all-classifieds.php">Stamford </a></li>
						<li><a href="all-classifieds.php">Waterbury   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Delaware </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Wilmington</a></li>
						<li><a href="all-classifieds.php">Dover</a></li>
						<li><a href="all-classifieds.php">Newark </a></li>
						<li><a href="all-classifieds.php">Bear</a></li>
						<li><a href="all-classifieds.php">Middletown</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Florida </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Jacksonville  </a></li>
						<li><a href="all-classifieds.php">Miami  </a></li>
						<li><a href="all-classifieds.php">Tampa  </a></li>
						<li><a href="all-classifieds.php">St. Petersburg   </a></li>
						<li><a href="all-classifieds.php">Orlando  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Georgia </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Atlanta </a></li>
						<li><a href="all-classifieds.php">Augusta </a></li>
						<li><a href="all-classifieds.php">Columbus</a></li>
						<li><a href="all-classifieds.php">Savannah  </a></li>
						<li><a href="all-classifieds.php">Athens   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Hawaii </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Honolulu  </a></li>
						<li><a href="all-classifieds.php">Pearl City </a></li>
						<li><a href="all-classifieds.php">Hilo </a></li>
						<li><a href="all-classifieds.php">Kailua   </a></li>
						<li><a href="all-classifieds.php">Waipahu </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Idaho  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Boise</a></li>
						<li><a href="all-classifieds.php">Nampa  </a></li>
						<li><a href="all-classifieds.php">Meridian </a></li>
						<li><a href="all-classifieds.php">Idaho Falls </a></li>
						<li><a href="all-classifieds.php">Pocatello  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Illinois </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Chicago  </a></li>
						<li><a href="all-classifieds.php">Aurora  </a></li>
						<li><a href="all-classifieds.php">Rockford  </a></li>
						<li><a href="all-classifieds.php">Joliet </a></li>
						<li><a href="all-classifieds.php">Naperville   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Indiana  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Indianapolis </a></li>
						<li><a href="all-classifieds.php"> Fort Wayne </a></li>
						<li><a href="all-classifieds.php"> Evansville  </a></li>
						<li><a href="all-classifieds.php"> South Bend </a></li>
						<li><a href="all-classifieds.php"> Hammond </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Iowa  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Des Moines </a></li>
						<li><a href="all-classifieds.php">Cedar Rapids </a></li>
						<li><a href="all-classifieds.php">Davenport </a></li>
						<li><a href="all-classifieds.php">Sioux City  </a></li>
						<li><a href="all-classifieds.php">Waterloo </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Kansas </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Wichita   </a></li>
						<li><a href="all-classifieds.php">Overland Park  </a></li>
						<li><a href="all-classifieds.php">Kansas City  </a></li>
						<li><a href="all-classifieds.php">Topeka  </a></li>
						<li><a href="all-classifieds.php">Olathe  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Kentucky </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Louisville  </a></li>
						<li><a href="all-classifieds.php">Lexington  </a></li>
						<li><a href="all-classifieds.php">Bowling Green </a></li>
						<li><a href="all-classifieds.php">Owensboro </a></li>
						<li><a href="all-classifieds.php">Covington   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Louisiana </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">New Orleans </a></li>
						<li><a href="all-classifieds.php">Baton Rouge    </a></li>
						<li><a href="all-classifieds.php">Shreveport    </a></li>
						<li><a href="all-classifieds.php">Metairie   </a></li>
						<li><a href="all-classifieds.php">Lafayette   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Maine </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Portland</a></li>
						<li><a href="all-classifieds.php">Lewiston </a></li>
						<li><a href="all-classifieds.php">Bangor </a></li>
						<li><a href="all-classifieds.php">South Portland</a></li>
						<li><a href="all-classifieds.php">Auburn </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Maryland </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Baltimore </a></li>
						<li><a href="all-classifieds.php">Frederick    </a></li>
						<li><a href="all-classifieds.php">Rockville    </a></li>
						<li><a href="all-classifieds.php">Gaithersburg    </a></li>
						<li><a href="all-classifieds.php">Bowie     </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Massachusetts </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Boston   </a></li>
						<li><a href="all-classifieds.php">Worcester    </a></li>
						<li><a href="all-classifieds.php">Springfield   </a></li>
						<li><a href="all-classifieds.php">Lowell    </a></li>
						<li><a href="all-classifieds.php">Cambridge    </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Michigan </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Detroit </a></li>
						<li><a href="all-classifieds.php">Grand Rapids </a></li>
						<li><a href="all-classifieds.php">Warren  </a></li>
						<li><a href="all-classifieds.php">Sterling Heights </a></li>
						<li><a href="all-classifieds.php">Lansing  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Minnesota  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Minneapolis  </a></li>
						<li><a href="all-classifieds.php">St. Paul   </a></li>
						<li><a href="all-classifieds.php">Rochester   </a></li>
						<li><a href="all-classifieds.php">Duluth   </a></li>
						<li><a href="all-classifieds.php">Bloomington   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Mississippi </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Jackson </a></li>
						<li><a href="all-classifieds.php">Gulfport </a></li>
						<li><a href="all-classifieds.php">Southaven </a></li>
						<li><a href="all-classifieds.php">Hattiesburg  </a></li>
						<li><a href="all-classifieds.php">Biloxi  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Missouri </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Kansas City</a></li>
						<li><a href="all-classifieds.php">St. Louis</a></li>
						<li><a href="all-classifieds.php">Springfield </a></li>
						<li><a href="all-classifieds.php">Independence </a></li>
						<li><a href="all-classifieds.php">Columbia </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Montana </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Billings </a></li>
						<li><a href="all-classifieds.php">Missoula  </a></li>
						<li><a href="all-classifieds.php">Great Falls </a></li>
						<li><a href="all-classifieds.php">Bozeman  </a></li>
						<li><a href="all-classifieds.php">Butte-Silver Bow</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Nebraska </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Omaha  </a></li>
						<li><a href="all-classifieds.php">Lincoln   </a></li>
						<li><a href="all-classifieds.php">Bellevue   </a></li>
						<li><a href="all-classifieds.php">Grand Island   </a></li>
						<li><a href="all-classifieds.php">Kearney   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Nevada </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Las Vegas  </a></li>
						<li><a href="all-classifieds.php">Henderson </a></li>
						<li><a href="all-classifieds.php">North Las Vegas  </a></li>
						<li><a href="all-classifieds.php">Reno   </a></li>
						<li><a href="all-classifieds.php">Sunrise Manor </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>New Hampshire </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Manchester   </a></li>
						<li><a href="all-classifieds.php">Nashua    </a></li>
						<li><a href="all-classifieds.php">Concord    </a></li>
						<li><a href="all-classifieds.php">Dover    </a></li>
						<li><a href="all-classifieds.php">Rochester    </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>New Jersey </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Newark  </a></li>
						<li><a href="all-classifieds.php">Jersey City      </a></li>
						<li><a href="all-classifieds.php">Paterson      </a></li>
						<li><a href="all-classifieds.php">Elizabeth   </a></li>
						<li><a href="all-classifieds.php">Edison      </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>New Mexico </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Albuquerque  </a></li>
						<li><a href="all-classifieds.php">Las Cruces  </a></li>
						<li><a href="all-classifieds.php">Rio Rancho </a></li>
						<li><a href="all-classifieds.php">Santa Fe  </a></li>
						<li><a href="all-classifieds.php">Roswell </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>New York </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">New York </a></li>
						<li><a href="all-classifieds.php">Buffalo      </a></li>
						<li><a href="all-classifieds.php">Rochester      </a></li>
						<li><a href="all-classifieds.php">Yonkers      </a></li>
						<li><a href="all-classifieds.php">Syracuse       </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>North Carolina  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Charlotte  </a></li>
						<li><a href="all-classifieds.php">Raleigh   </a></li>
						<li><a href="all-classifieds.php">Greensboro   </a></li>
						<li><a href="all-classifieds.php">Winston-Salem  </a></li>
						<li><a href="all-classifieds.php">Durham   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>North Dakota  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Fargo  </a></li>
						<li><a href="all-classifieds.php">Bismarck   </a></li>
						<li><a href="all-classifieds.php">Grand Forks   </a></li>
						<li><a href="all-classifieds.php">Minot   </a></li>
						<li><a href="all-classifieds.php">West Fargo  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Ohio  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Columbus  </a></li>
						<li><a href="all-classifieds.php">Cleveland  </a></li>
						<li><a href="all-classifieds.php">Cincinnati  </a></li>
						<li><a href="all-classifieds.php">Toledo   </a></li>
						<li><a href="all-classifieds.php">Akron   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Oklahoma  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Oklahoma City </a></li>
						<li><a href="all-classifieds.php">Tulsa </a></li>
						<li><a href="all-classifieds.php">Norman  </a></li>
						<li><a href="all-classifieds.php">Broken Arrow </a></li>
						<li><a href="all-classifieds.php">Lawton </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Oregon  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Portland </a></li>
						<li><a href="all-classifieds.php"> Eugene  </a></li>
						<li><a href="all-classifieds.php"> Salem  </a></li>
						<li><a href="all-classifieds.php"> Gresham  </a></li>
						<li><a href="all-classifieds.php"> Hillsboro  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Pennsylvania  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Philadelphia  </a></li>
						<li><a href="all-classifieds.php">Pittsburgh   </a></li>
						<li><a href="all-classifieds.php">Allentown   </a></li>
						<li><a href="all-classifieds.php">Erie   </a></li>
						<li><a href="all-classifieds.php">Reading   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Rhode Island  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Providence  </a></li>
						<li><a href="all-classifieds.php">Warwick   </a></li>
						<li><a href="all-classifieds.php">Cranston   </a></li>
						<li><a href="all-classifieds.php">Pawtucket   </a></li>
						<li><a href="all-classifieds.php">East Providence  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>South Carolina </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Columbia </a></li>
						<li><a href="all-classifieds.php">Charleston </a></li>
						<li><a href="all-classifieds.php">North Charleston </a></li>
						<li><a href="all-classifieds.php">Mount Pleasant</a></li>
						<li><a href="all-classifieds.php">Rock Hill </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>South Dakota </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Sioux Falls </a></li>
						<li><a href="all-classifieds.php">Rapid City </a></li>
						<li><a href="all-classifieds.php">Aberdeen </a></li>
						<li><a href="all-classifieds.php">Brookings</a></li>
						<li><a href="all-classifieds.php">Watertown</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Tennessee  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Memphis </a></li>
						<li><a href="all-classifieds.php">Nashville </a></li>
						<li><a href="all-classifieds.php">Knoxville </a></li>
						<li><a href="all-classifieds.php">Chattanooga </a></li>
						<li><a href="all-classifieds.php">Clarksville </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Texas   </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Houston </a></li>
						<li><a href="all-classifieds.php">San Antonio </a></li>
						<li><a href="all-classifieds.php">Dallas </a></li>
						<li><a href="all-classifieds.php">Austin </a></li>
						<li><a href="all-classifieds.php">Fort Worth </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Utah  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Salt Lake City</a></li>
						<li><a href="all-classifieds.php"> West Valley City</a></li>
						<li><a href="all-classifieds.php"> Provo</a></li>
						<li><a href="all-classifieds.php"> West Jordan</a></li>
						<li><a href="all-classifieds.php"> Orem</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Vermont </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Burlington</a></li>
						<li><a href="all-classifieds.php"> Essex</a></li>
						<li><a href="all-classifieds.php"> South Burlington</a></li>
						<li><a href="all-classifieds.php"> Colchester</a></li>
						<li><a href="all-classifieds.php"> Rutland</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Virginia  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Virginia Beach</a></li>
						<li><a href="all-classifieds.php"> Norfolk</a></li>
						<li><a href="all-classifieds.php"> Chesapeake</a></li>
						<li><a href="all-classifieds.php"> Arlington</a></li>
						<li><a href="all-classifieds.php"> Richmond</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Washington </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Seattle</a></li>
						<li><a href="all-classifieds.php"> Spokane</a></li>
						<li><a href="all-classifieds.php"> Tacoma</a></li>
						<li><a href="all-classifieds.php"> Vancouver</a></li>
						<li><a href="all-classifieds.php"> Bellevue</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>West Virginia </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Charleston </a></li>
						<li><a href="all-classifieds.php">Huntington </a></li>
						<li><a href="all-classifieds.php">Parkersburg </a></li>
						<li><a href="all-classifieds.php">Morgantown </a></li>
						<li><a href="all-classifieds.php">Wheeling </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Wisconsin </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Milwaukee </a></li>
						<li><a href="all-classifieds.php">Madison </a></li>
						<li><a href="all-classifieds.php">Green Bay </a></li>
						<li><a href="all-classifieds.php">Kenosha </a></li>
						<li><a href="all-classifieds.php">Racine </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Wyoming</h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Cheyenne</a></li>
						<li><a href="all-classifieds.php"> Casper</a></li>
						<li><a href="all-classifieds.php"> Laramie</a></li>
						<li><a href="all-classifieds.php"> Gillette</a></li>
						<li><a href="all-classifieds.php"> Rock Springs</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //Regions -->
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