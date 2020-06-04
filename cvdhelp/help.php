<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Kamyadan</title>
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
		<section class="banner_area">
			<div class="banner_inner d-flex align-items-center">
				<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>HELP ME</h2>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Home Banner Area =================-->
 		<div class="whole-wrap">
			<div class="container">
				<div class="section-top-border">
					<h3 class="mb-30 title_color">Help ???</h3>
					<div class="row">
						<div class="col-lg-12">
							<blockquote class="generic-blockquote">
								The current situation of the pandemic has come to an alarming stage in which there is an exponential increase in the number of cases and deaths in the country.
        						During these hardships KAMYADAN is providing means of helping the needed sections of the society who are undergoing problems in the areas of livelihood and are finding it hard to get food or shelter.
							</blockquote>
						</div>
					</div>
				</div>

				<div class="section-top-border">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<h3 class="mb-30 title_color">Raise For Help !!!</h3>
							<form name="helprequest" id="helprequest" method="POST" enctype="multipart/form-data">
								<div class="mt-10">
									<input type="text" name="name" id="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required class="single-input">
								</div>
								<div class="mt-10">
									<input type="email" name="email" id="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="phone" id="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required class="single-input">
								</div>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
									<input type="text" name="address" id="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
								</div>
								<div class="mt-10">
									<textarea class="single-textarea" name="subject" id="subject" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
								</div>
								<div class="button-group-area mt-40">
									<button  class="genric-btn primary circle arrow" name="submit" id="submit">Submit<span class="lnr lnr-arrow-right"></span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>    
        

        
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


<?php
  include('includes/config.php');
  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $subject=$_POST['subject'];

    if($name==NULL && $email==NULL && $phone==NULL && $address==NULL && $subject==NULL )
    {
      echo "<script type='text/javascript'>
        alert('Please fill the fields to Submit the form');
      </script>";
    }
    elseif($name==NULL)
    {
      echo "<script type='text/javascript'>
        alert('Name cannot be empty!');
      </script>";
    }
    elseif($email==NULL)
    {
      echo "<script type='text/javascript'>
        alert('Email cannot be empty!');
      </script>";
    }
    elseif($phone==NULL)
    {
      echo "<script type='text/javascript'>
        alert('Phone cannot be empty!');
      </script>";
    }
    elseif($address==NULL)
    {
      echo "<script type='text/javascript'>
        alert('Address cannot be empty!');
      </script>";
    }
    elseif($subject==NULL)
    {
      echo "<script type='text/javascript'>
        alert('Subject cannot be empty!');
      </script>";
    }
    elseif(!preg_match('/^[0-9]{10}+$/', $phone))
    {
      echo "<script type='text/javascript'>
        alert('Please Provide valid Phone Number!');
      </script>";
    }
    elseif(!preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email))
    {
      echo "<script type='text/javascript'>
        alert('Please Provide valid Email Id!');
      </script>";
    }
    else
    {

    $sql="INSERT INTO helprequests (name,email,phone,address,subject) VALUES(:name,:email,:phone,:address,:subject)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':phone',$phone,PDO::PARAM_STR);
    $query->bindParam(':address',$address,PDO::PARAM_STR);
    $query->bindParam(':subject',$subject,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId)
    {
      echo "<script type='text/javascript'>
                alert('Help Request Submitted Successfully!');
            </script>";
    }
    else
    {
            echo "<script type='text/javascript'>
                alert('Error !!! Unable to send your Query. Please try after sometime !');
            </script>";
    }
  }
  }
?>