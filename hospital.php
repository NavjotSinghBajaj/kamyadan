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
        <style>

#myInput {
  background-image: url('img/search.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
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
								<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="help.php">Help</a></li>
								<li class="nav-item"><a class="nav-link" href="donate.php">Donate</a></li>  
								<li class="nav-item submenu dropdown active">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Connect</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="ngo.php">NGO</a></li>
										<li class="nav-item"><a class="nav-link" href="ps.php">Police Station</a></li>
										<li class="nav-item active"><a class="nav-link" href="hospital.php">Hospitals</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Covid Tracker</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="coronatracker/india.php">India</a></li>
										<li class="nav-item"><a class="nav-link" href="coronatracker/world.php">World</a></li>
									</ul>
								</li> 
                                <li class="nav-item"><a class="nav-link" href="coronatracker/demographics.php">Statistics</a></li>
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
						<h2>LIST OF Police Stations @ DELHI</h2>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Home Banner Area =================-->

		<div class="whole-wrap">
			<div class="container">
				<div class="section-top-border">
					<div class="progress-table-wrap">
						<div class="progress-table">
							<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Pincode..">
							<table id="myTable">
          						<tr class="header">
         							 <th style="width:05%;">sl#</th>
          							<th style="width:30%;">Name</th>
          							<th style="width:50%;">Address</th>
          							<th style="width:30%;">Pincode</th>
          							<th style="width:30%;">Contact Number</th>
          						</tr>

         					 	<?php 
         					 	include('includes/config.php');
         					 	$sql = "SELECT * from hospitals";
           							 $query = $dbh -> prepare($sql);
            						$query->execute();
            						$results=$query->fetchAll(PDO::FETCH_OBJ);
            						$cnt=1;
            						if($query->rowCount() > 0)
            						{
              							foreach($results as $result)
            							{
          						?>
          						<tr>
            						<td><?php echo htmlentities($cnt);?></td>
            						<td><?php echo htmlentities($result->name);?></td>
            						<td><?php echo htmlentities($result->address);?></td>
            						<td><?php echo htmlentities($result->pincode);?></td>
            						<td>+91 - <?php echo htmlentities($result->contact);?></td>
          						</tr>
          						<?php $cnt=$cnt+1;} }?>
        					</table>
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
	<script type="text/javascript">
		function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
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
</body>
</html>