
<?php

    $jsonData = file_get_contents("https://api.covid19india.org/data.json");
    $data = json_decode($jsonData, true);

    $jsonData1 = file_get_contents("https://api.thevirustracker.com/free-api?global=stats");
    $data1 = json_decode($jsonData1, true);

    $jsonData2 = file_get_contents("https://corona.lmao.ninja/v2/continents?yesterday=true&sort");
    $data2 = json_decode($jsonData2, true);

    $dataPoints = array( 
      array("label"=>"Active", "y"=>$data['statewise'][0]['active']),
      array("label"=>"Recovered", "y"=>$data['statewise'][0]['recovered']),
      array("label"=>"Deaths", "y"=>$data['statewise'][0]['deaths'])
    );

    $dataPoints1 = array();
    $dataPoints2 = array();
    $dataPoints3 = array();
    $dataPoints4 = array();
    $dataPoints6 = array();
    $dataPoints7 = array();
    $dataPoints8 = array();

    $arr=$data['statewise'][0]['confirmed'];
    foreach ($data['statewise'] as $key => $value)
    {
      if($arr != $value['confirmed'])
      {
        array_push($dataPoints1, array("y"=> $value['confirmed'], "label"=> $value['state']));
      }
    }

    foreach ($data['cases_time_series'] as $key => $value)
    {
      array_push($dataPoints2, array("label"=> $value['date'], "y"=> $value['dailyconfirmed']));
      array_push($dataPoints3, array("label"=> $value['date'], "y"=> $value['dailyrecovered']));
      array_push($dataPoints4, array("label"=> $value['date'], "y"=> $value['dailydeceased']));
    }

    $total_active=$data1['results'][0]['total_cases'] - ($data1['results'][0]['total_recovered']+$data1['results'][0]['total_deaths']);
    $dataPoints5 = array( 
      array("label"=>"Active", "y"=>$total_active),
      array("label"=>"Recovered", "y"=>$data1['results'][0]['total_recovered']),
      array("label"=>"Deaths", "y"=>$data1['results'][0]['total_deaths'])
    );


    foreach ($data2 as $key => $value)
    {

      array_push($dataPoints6, array("y"=> $value['cases'], "label"=> $value['continent']));
      array_push($dataPoints7, array("y"=> $value['recovered'], "label"=> $value['continent']));
      array_push($dataPoints8, array("y"=> $value['deaths'], "label"=> $value['continent']));
    }

?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['geochart', 'corechart']});
google.charts.setOnLoadCallback(drawRegionsMap);
google.charts.setOnLoadCallback(drawChart);

function drawRegionsMap() {
 var data = google.visualization.arrayToDataTable([

  <?php
    include 'logic.php';
    echo '["Country","confirmed"],';
    foreach($data as $key => $value){
      echo '["'.$key.'",'.$value[$days_count]['confirmed'].'],';
    }

?>
          
]);

var options = {
colorAxis: {colors: ['#f59393', '#bf3b3b']},
//legend: 'none',
};

var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
chart.draw(data, options);
}
</script>

<html lang="en">
    <head>
        <script>
window.onload = function() {
var chart = new CanvasJS.Chart("chartContainer", {
  theme: "light2",
  animationEnabled: true,
  data: [{
    type: "doughnut",
    startAngle: 40,
    indexLabel: "{label} - {y}",
    showInLegend: true,
    legendText: "{label} : {y}",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();

var chart = new CanvasJS.Chart("chartContainer1", {
  animationEnabled: true,
  theme: "light2",

  axisY: {
    title: "Confirm Cases"
  },
  axisX:{
    labelMaxWidth: 180,           
    labelAngle: -45,
    interval: 1
  },
  data: [{
    type: "column",
 //   xValueFormatString: "#,##0.## tonnes",
    dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();


var chart = new CanvasJS.Chart("chartContainer2", {
  animationEnabled: true,
  theme: "light2",
  axisY: {
    title: "TotalCases",
  },
    axisX:{
    labelMaxWidth: 180,           
    labelAngle: -90,
    interval: 7
  },
  data: [{
    type: "spline",
    name: "confirmed",
    showInLegend: true,
    dataPoints: <?php echo json_encode($dataPoints2,JSON_NUMERIC_CHECK); ?>
  },
  {
    type: "spline",
    name:"recovered",
    showInLegend: true,
    dataPoints: <?php echo json_encode($dataPoints3,JSON_NUMERIC_CHECK); ?>
  },
    {
    type: "spline",
    name:"deceased",
    showInLegend: true,
    dataPoints: <?php echo json_encode($dataPoints4,JSON_NUMERIC_CHECK); ?>
  },
  ]
});
chart.render();


var chart = new CanvasJS.Chart("chartContainer4", {
  animationEnabled: true,
  data: [{
    type: "pie",
    startAngle: 40,
    showInLegend: true,
    legendText: "{label} : {y}",
    indexLabel: "{label} ({y})",
    dataPoints: <?php echo json_encode($dataPoints5, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();


var chart = new CanvasJS.Chart("chartContainer3", {
  theme: "light2",
  animationEnabled: true,
  toolTip:{
    shared: true,
    reversed: true
  },
  legend: {
    cursor: "pointer",
    itemclick: toggleDataSeries
  },
  data: [
    {
      type: "stackedColumn",
      name: "confirmed",
      showInLegend: true,
      dataPoints: <?php echo json_encode($dataPoints6, JSON_NUMERIC_CHECK); ?>
    },{
      type: "stackedColumn",
      name: "recovered",
      showInLegend: true,
      dataPoints: <?php echo json_encode($dataPoints7, JSON_NUMERIC_CHECK); ?>
    },{
      type: "stackedColumn",
      name: "deaths",
      showInLegend: true,
      dataPoints: <?php echo json_encode($dataPoints8, JSON_NUMERIC_CHECK); ?>
    }
  ]
});
 
chart.render();
 
function toggleDataSeries(e) {
  if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  } else {
    e.dataSeries.visible = true;
  }
  e.chart.render();
}


}


</script>
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
         <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>
          <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Covid Tracker</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="india.php">India</a></li>
                                        <li class="nav-item"><a class="nav-link" href="world.php">World</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item active"><a class="nav-link" href="demographics.php">Statistics</a></li> 
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
                        <h2>CORONA STATISTICS</h2>
                    </div>
                </div>
            </div>
        </section>


        <div class="container-fluid mt-4">
    <!-- CHART STARTS HERE -->
    <div class="row">

            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold">India State wise Reported Cases</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold">India Daily Analysis</h6>
                </div>
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                   <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                  </div>
                </div>
              </div>
            </div>
    </div>
        <div class="row">

            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold">India Daily Cases - Confirm/Recover/Deceased</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
            <div class="row">

            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold">Continent wise Cases</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <div id="chartContainer3" style="height: 370px; width: 100%;"></div>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold">World Daily Analysis</h6>
                </div>
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                   <div id="chartContainer4" style="height: 370px; width: 100%;"></div>
                  </div>
                </div>
              </div>
            </div>
    </div>
         <div class="row">

            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold">Covid19 - World Map</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <div id="regions_div" style="height: 370px; width: 100%;"></div>
                    <p>Sum of confirmed cases : <?php echo $total_confirmed;?></p>
                  </div>
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