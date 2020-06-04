<?php
	include 'coronatracker/logic.php';
	    $jsonData1 = file_get_contents("https://api.apify.com/v2/key-value-stores/toDWvRj1JpTXiM8FF/records/LATEST?disableRedirect=true");
    $data1 = json_decode($jsonData1, true);
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>KAMYADAN</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
<body>
        
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="help.php">Help</a></li>
								<li class="nav-item"><a class="nav-link" href="donate.php">Donate</a></li>  
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Connect</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="ngo.php">NGO</a>
										<li class="nav-item"><a class="nav-link" href="ps.php">Police Station</a>
										<li class="nav-item"><a class="nav-link" href="hospital.php">Hospitals</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Covid Tracker</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="coronatracker/india.php">India</a></li>
										<li class="nav-item"><a class="nav-link" href="coronatracker/world.php">World</a></li>
									</ul>
								</li> 
								<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
							</ul>
						</div> 
					</div>
				</nav>
			</div>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->
	
	<!--================ Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="banner_content">
					<p class="upper_text">KAMYADAN</p>
					<h2>A DESIRABLE GIFT</h2>
					<a class="primary_btn mr-20" href="https://epass.jantasamvad.org/epass/relief/english/" target="_blank">Apply ePass</a>
					<a class="primary_btn yellow_btn text-white" href="causes.html">Review Site</a>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->
	
	<!--================ Start Causes Area =================-->
	<section class="causes_area">
		<div class="container">
			<div class="main_title">
				<h2>Our Major Works</h2>
				<p>Kamyadan works towards </p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single_causes">
						<h4>Give Donation</h4>
						<img src="img/causes/c1.png" alt="">
						<p>
							Giving or collecting donations for all the peoples who are affected by covi19 and need help for the survival.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_causes">
						<h4>Give Inspiration</h4>
						<img src="img/causes/c2.png" alt="">
						<p>
							Giving inspriation to fight with Covid19 like a warrior. #JeetegaIndia aur #PhirSeMuskuraegaIndia
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_causes">
						<h4>Become Volunteer</h4>
						<img src="img/causes/c3.png" alt="">
						<p>
							Come and join hands with us, and let's strive to help the needfull during this period of pandemic.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Causes Area =================-->

	<!--================ Start About Us Area =================-->
	<section class="about_area section_gap_bottom">
		<div class="container">
			<div class="row">	
				<div class="single_about row">
					<div class="col-lg-6 col-md-12 text-center about_left">
						<div class="about_thumb">
							<img src="img/about-img.jpg" class="img-fluid" alt="">
						</div>
					</div>
					<div class="col-lg-6 col-md-12 about_right">
						<div class="about_content">
							<h2>
								ABOUT KAMYADAN				
							</h2>
							<p>
								Welcome to KAMYADAN the site that connects the needful to the their needs. This site has been created with the vision of helping the community by giving the people a portal to communicate their problems to the organizations that can solve them.</p>
      						<p>	
      							People can add their problems on the site which will be available to all NGOs and organizations that have taken a step forward to help.Donations will be given to the NGOs.
      							The strength in communication is a vital tool in the fight against the pandemic. It's time to help each other and win this battle.</p>
      						<p>
      							This site will also help the NGOs to get connected with the ones in need at the fastest possible rate of information that has been directly provided by the person who is in distress.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================ Start Recent Event Area =================-->
	<section class="event_area section_gap_custom">
		<div class="container">
			<div class="main_title">
				<h2>Covid19 Status</h2>
			</div>
		
			<div class="row">
				<div class="col-lg-6">
					<div class="single_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<img class="img-fluid w-100" src="img/event/india.jpg" alt="" width="262px" height="280px">
									<div class="img-overlay"></div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										India Corona Status
									</h3>
									<div class="d-flex count_time">
										<div class="mr-25">
											<h4><?php echo $data1{'totalCases'}; ?></h4>
											<p>Confirmed</p>
										</div>
										<div class="mr-25">
											<h4><?php echo $data1{'activeCases'}; ?>8</h4>
											<p>Active</p>
										</div>
										<div class="mr-25">
											<h4><?php echo $data1{'deaths'}; ?></h4>
											<p>Deaths</p>
										</div>
									</div>
									<a href="coronatracker/india.php" class="primary_btn">View More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<img class="img-fluid w-100" src="img/event/world.PNG" alt="" width="262px" height="280px">
									<div class="img-overlay"></div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										World Covid Statistics
									</h3>
									<div class="d-flex count_time">
										<div class="mr-25">
											<h4 ><?php echo $total_confirmed;?></h4>
											<p>Confirmed</p>
										</div>
										<div class="mr-25">
											<h4><?php echo $total_recovered;?></h4>
											<p>Active</p>
										</div>
										<div class="mr-25">
											<h4><?php echo $total_deaths;?></h4>
											<p>Deaths</p>
										</div>
									</div>
									<a href="coronatracker/world.php" class="primary_btn">View More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Recent Event Area =================-->

	<!--================Team Area =================-->
	<section class="team_area section_gap">
		<div class="container">
			<div class="main_title">
				<h2>Meet our Team</h2>
			</div>
			<div class="row team_inner">
				<div class="col-lg-3 col-md-6">
					<div class="team_item">
						<div class="team_img">
							<img class="img-fluid" src="img/voluteer/navjot.JPG" alt="" width="263" height="270">
						</div>
						<div class="team_name">
							<h4>Navjot Singh Bajaj</h4>
							<p>Full Stack Developer</p>
							<p class="mt-20">
							</p>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#" class="active"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-envelope-o"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="team_item">
						<div class="team_img">
							<img class="img-fluid" src="img/voluteer/dhruv.jpg" alt="" width="263px" height="270px">
						</div>
						<div class="team_name">
							<h4>Dhruv Tewari</h4>
							<p>Content Writer</p>
							<p class="mt-20">
							
							</p>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#" class="active"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-envelope-o"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="team_item">
						<div class="team_img">
							<img class="img-fluid" src="img/voluteer/arpit.jpg" alt="" width="263px" height="270px">
						</div>
						<div class="team_name">
							<h4>Arpit Chauhan</h4>
							<p>Database Administrator</p>
							<p class="mt-20">
								
							</p>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#" class="active"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-envelope-o"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="team_item">
						<div class="team_img">
							<img class="img-fluid" src="img/voluteer/sarthak.jpg" alt="" width="263px" height="270px">
						</div>
						<div class="team_name">
							<h4>Sarthak Agarwal</h4>
							<p>Database Administrator</p>
							<p class="mt-20">
							
							</p>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#" class="active"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-envelope-o"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Team Area =================-->

	<!--================ Start CTA Area =================-->

	<!--================ End CTA Area =================-->

	<!--================ Start Subscribe Area =================-->
	<div class="container">
		<div class="subscribe_area">
			<div class="row">
				<div class="col-lg-12">
					<div class="d-flex align-items-center">
						<h1 class="text-white">Do you have a question?</h1>
						<div id="mc_embed_signup">
								<div class="input-group d-flex flex-row">
									<a href="contact.php"><button class="ml-10 primary_btn yellow_btn btn sub-btn rounded">Connect With Us!!!</button></a>	
								</div>									
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Subscribe Area =================-->
        
	<!--================ Start footer Area  =================-->	
	<footer>
		<div class="footer-area">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-5 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">Our Mission</h4>
							<p>
								The aim of this site is to provide the NGO with data and information about the people who require help and support of any essential need (food , water , shelter , mask , sanitizer ).
							</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Quick Links</h4>
							<ul class="list">
								<li><a href="index.php">Home</a></li>
								<li><a href="help.php">Help</a></li>
								<li><a href="donate.php">Donate</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contact Us</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Address
								</p>
								<p>Delhi</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									kamyadan.help@gmail.com <br>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row d-flex">
					<p>Kamyadan</p>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->
	
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/countdown.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>
</html>