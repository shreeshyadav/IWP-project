<?php

    include 'test.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/996973c893.js"
      crossorigin="anonymous"
    ></script>

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="style.css" />

    <!-- My jQuery -->
    <script src="main.js"></script>

    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <title>Covid-19 Tracker</title>
    <link rel = "icon" href =  
"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Coronavirus_SVG_Vector_Image.svg/512px-Coronavirus_SVG_Vector_Image.svg.png" 
        type = "image/x-icon">
</head>
<body >
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1 class="">It uses your location to get cases near you. If you don't wish to share the location you may exit the website</h1>
        
    </div>
    <div class="container-fluid p-5 text-center my-3">
        <h4 class="" style="display: inline; margin-right: 30px;"><a href="query_page.php" target="_blank">Not Feeling Well?</a></h4>
        <h4 class="" style="display: inline;"><a href="http://localhost:3000" target="_blank">List of Hospitals</a></h4>
    </div>
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1 class="">Covid-19 Tracker</h1>
        
    </div>
    <div class="row">
    <div class="col-sm">
    <div class="container-fluid bg-light p-5 text-center my-3">
        
        <h5 class="text-muted">Your nearest city: <?php echo $city?>.</h5>
    </div>
    
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo number_format($state_confirmed);?>
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo number_format($state_recovered);?>
            </div>
            <div class="col-4 text-danger">
                <h5>Deceased</h5>
                <?php echo number_format($state_deceased);?>
            </div>
        </div>
    </div>
</div>
<div class="col-sm">
    <div class="container-fluid bg-light p-5 text-center my-3">
       
        <h5 class="text-muted">All India Data</h5>
    </div>
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo number_format($total_confirmed);?>
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo number_format($total_recovered);?>
            </div>
            <div class="col-4 text-danger">
                <h5>Deceased</h5>
                <?php echo number_format($total_deaths);?>
            </div>
        </div>
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
                        for($x=1;$x<=37;$x++){
                            $increase = number_format($data['statewise'][$x]['deltaconfirmed']);
                    ?>
                        <tr>
                            <th scope="row"><?php echo $data['statewise'][$x]['state']?></th>
                            <td>
                                <?php echo number_format($data['statewise'][$x]['confirmed']);?>
                                <?php if($increase != 0){ ?>
                                    <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>  
                                <?php } ?>    
                            </td>
                            <td><?php echo number_format($data['statewise'][$x]['recovered']);?></td>
                            <td><?php echo number_format($data['statewise'][$x]['deaths']);?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <canvas id="myChart"></canvas>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">Copyright &copy;2020, Shreesh S Yadav</span>
        </div>
    </footer>

</body>
</html>