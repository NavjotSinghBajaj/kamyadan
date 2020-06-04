<?php

    $jsonData = file_get_contents("https://api.covid19india.org/data.json");
    $data = json_decode($jsonData, true);

    /*foreach ($data{'cases_time_series'} as $key => $value) {
        echo $value['totalconfirmed'];
    }*/
?>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../img/favicon.png" type="image/png">
        <title>Kamyadan</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>
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
                                <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li> 
                                <li class="nav-item"><a class="nav-link" href="../help.php">Help</a></li>
                                <li class="nav-item"><a class="nav-link" href="../donate.php">Donate</a></li>  
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Connect</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="../ngo.php">NGO</a></li>
                                        <li class="nav-item"><a class="nav-link" href="../ps.php">Police Station</a></li>
                                        <li class="nav-item"><a class="nav-link" href="../hospital.php">Hospitals</a></li>
                                    </ul>
                                </li> 
                                <li class="nav-item submenu dropdown active">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Covid Tracker</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item active"><a class="nav-link" href="india.php">India</a></li>
                                        <li class="nav-item"><a class="nav-link" href="world.php">World</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="demographics.php">Statistics</a></li>   
                                <li class="nav-item"><a class="nav-link" href="../contact.php">Contact</a></li>
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
                        <h2>India Corona Status</h2>
                    </div>
                </div>
            </div>
        </section>

    <!--================End Home Banner Area =================-->
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1 class="">Covid-19 Tracker</h1>
        <p class="text-muted">Last Updated On: <?php echo $data['statewise'][0]['lastupdatedtime'];?></p>
    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-3 text-warning">
                <h5>Confirmed</h5>
               <?php echo $data['statewise'][0]['confirmed']; ?><br>
              <small class="text-warning pl-3"><i class="fas fa-arrow-up"></i> <?php echo $data['statewise'][0]['deltaconfirmed'];?></small>
            </div>
            <div class="col-3 text-primary">
                <h5>Active</h5>
               <?php echo $data['statewise'][0]['active']; ?>
            </div>
            <div class="col-3 text-success">
                <h5>Recovered</h5>
                <?php echo $data['statewise'][0]['recovered']; ?><br>
            <small class="text-success pl-3"><i class="fas fa-arrow-up"></i>    <?php echo $data['statewise'][0]['deltarecovered'];?></small>
            </div>
            <div class="col-3 text-danger">
                <h5>Deceased</h5>
                <?php echo $data['statewise'][0]['deaths']; ?><br>
                <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i>    <?php echo $data['statewise'][0]['deltadeaths'];?></small>
            </div>
        </div>
    </div>

    <div class="container bg-light p-3 my-5 text-center">
        <h5 class="text-info">"Prevention is the Cure."</h5>
        <p class="text-muted">Stay Indoors Stay Safe.</p>
    </div>

    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">States</th>
                        <th scope="col">Confirmed</th>
                        <th scope="col">Active</th>
                        <th scope="col">Recovered</th>
                        <th scope="col">Deceased</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $arr=$data['statewise'][0]['confirmed'];
                    foreach ($data['statewise'] as $key => $value){
                        $increase=$value['deltaconfirmed'];
                        $recovered=$value['deltarecovered'];
                        $death=$value['deltadeaths'];
                    if($arr != $value['confirmed'])
                    {   
                    ?>

                        <tr>
                            <th><?php echo $value['state'];?></th>
                            <td> <?php echo $value['confirmed'];?> 
                            <?php if($increase != 0){ ?>
                            <small class="text-warning pl-3"><i class="fas fa-arrow-up"></i><?php echo $value['deltaconfirmed'];?></small>  <?php } ?>
                            </td>   
                            <td> <?php echo $value['active'];?> </td>
                            <td><?php echo $value['recovered'];?>
                            <?php if($recovered != 0){ ?>
                            <small class="text-success pl-3"><i class="fas fa-arrow-up"></i><?php echo $value['deltarecovered'];?></small>  <?php } ?>
                            </td>
                            <td><?php echo $value['deaths'];?>
                            <?php if($death != 0){ ?>
                            <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $value['deltadeaths'];?></small>  <?php } ?>
                            </td>
                        </tr>
                    <?php } }?>
                </tbody>
            </table>
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
                                <li><a href="../index.php">Home</a></li>
                                <li><a href="../help.php">Help</a></li>
                                <li><a href="../donate.php">Donate</a></li>
                                <li><a href="../contact.php">Contact</a></li>
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
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/stellar.js"></script>
    <script src="../vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="../vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/mail-script.js"></script>
    <script src="../js/countdown.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="../js/gmaps.min.js"></script>
    <script src="../js/theme.js"></script>
</body>
</html>