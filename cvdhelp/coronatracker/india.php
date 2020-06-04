<?php

    $jsonData = file_get_contents("https://api.apify.com/v2/key-value-stores/toDWvRj1JpTXiM8FF/records/LATEST?disableRedirect=true");
    $data = json_decode($jsonData, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>
    <link rel=icon href="../images/logo.PNG" sizes="20x20" type="image/png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <title>India Covid-19 Tracker</title>
</head>
<body>
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1 class="">India Covid-19 Tracker</h1>
    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-3 text-warning">
                <h5>Confirmed</h5>
                <?php echo $data{'totalCases'}; ?>
            </div>
            <div class="col-3 text-primary">
                <h5>Active</h5>
                <?php echo $data{'activeCases'}; ?>
            </div>
            <div class="col-3 text-success">
                <h5>Recovered</h5>
                <?php echo $data{'recovered'}; ?>
            </div>
            <div class="col-3 text-danger">
                <h5>Deceased</h5>
                <?php echo $data{'deaths'}; ?>
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
                        <th scope="col">Recovered</th>
                        <th scope="col">Deceased</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($data['regionData'] as $key => $value){   
                    ?>
                        <tr>
                            <th><?php echo $value['region'];?></th>
                            <td>
                                <?php echo $value['totalInfected'];?>     
                            </td>
                            <td><?php echo $value['recovered'];?></td>
                            <td><?php echo $value['deceased'];?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">Designed By Kamyadan</span>
        </div>
    </footer>

</body>
</html>