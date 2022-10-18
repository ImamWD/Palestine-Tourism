<?php 
session_start();
if(empty($_SESSION['admin']) )
{
    header("Location:./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestine Tourism</title>
    <link rel="stylesheet" href="style/all.min.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/Dashboard-pages-css/dashboards.css"/>
</head>
<body>
<!-- call navbar file-->
<?php include "navbar.php" ?>
<!-- dashboards code-->
<?php 
include "./backendfiles/conniction.php";
$R = "Religious";
$Rcount = "SELECT COUNT(id) As co from places where type = '" . $R . "';";
$Rresult = mysqli_query($conn,$Rcount);
$Rresult = $Rresult->fetch_assoc();
$Rresult = $Rresult['co'];

$R = "Cultural";
$Rcount = "SELECT COUNT(id) As co from places where type = '" . $R . "';";
$Cresult = mysqli_query($conn,$Rcount);
$Cresult = $Cresult->fetch_assoc();
$Cresult = $Cresult['co'];

$R = "Leisure";
$Rcount = "SELECT COUNT(id) As co from places where type = '" . $R . "';";
$Lresult = mysqli_query($conn,$Rcount);
$Lresult = $Lresult->fetch_assoc();
$Lresult = $Lresult['co'];

$R = "Medical";
$Rcount = "SELECT COUNT(id) As co from places where type = '" . $R . "';";
$Mresult = mysqli_query($conn,$Rcount);
$Mresult = $Mresult->fetch_assoc();
$Mresult = $Mresult['co'];
?>
<section class="container">
    <div class="Dashboards-div">

        <div class="Dash-content">
            <img src="./images/Dashboards-images/Religious.jpg" class="Dash-image"/>
            <div class="Dash-name">
                <h2 class="Dash-h2">Religious Dashboard</h2>
                <h4><span class="Dash-h4"><?php echo $Rresult; ?></span> Itemes</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis tenetur nostrum quidem minus ipsam eius quo debitis cupiditate explicabo aspernatur, consequuntur necessitatibus. Neque eum illo ullam rem! Tempora, commodi aliquam? </p>
                <a href="./ReligiousDashboard.php" class="btn btn-open">Open <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="Dash-content">
            <img src="./images/Dashboards-images/Cultural.jpg" class="Dash-image"/>
            <div class="Dash-name">
                <h2 class="Dash-h2" >Cultural Dashboard</h2>
                <h4><span class="Dash-h4"><?php echo $Cresult; ?></span> Itemes</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis tenetur nostrum quidem minus ipsam eius quo debitis cupiditate explicabo aspernatur, consequuntur necessitatibus. Neque eum illo ullam rem! Tempora, commodi aliquam? </p>
                <a href="./CulturalDashboard.php" class="btn btn-open">Open <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="Dash-content">
            <img src="./images/Dashboards-images/Leisure.jpg" class="Dash-image"/>
            <div class="Dash-name">
                <h2 class="Dash-h2" >Leisure Dashboard</h2>
                <h4><span class="Dash-h4"><?php echo $Lresult; ?></span> Itemes</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis tenetur nostrum quidem minus ipsam eius quo debitis cupiditate explicabo aspernatur, consequuntur necessitatibus. Neque eum illo ullam rem! Tempora, commodi aliquam? </p>
                <a href="./LeisureDashboard.php" class="btn btn-open">Open <i class="fa-solid fa-arrow-right"></i></a>
            
            </div>
        </div>

        <div class="Dash-content">
            <img src="./images/Dashboards-images/Medical.jpg" class="Dash-image"/>
            <div class="Dash-name">
                <h2 class="Dash-h2" >Medical Dashboard</h2>
                <h4><span class="Dash-h4"><?php echo $Mresult; ?></span> Itemes</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis tenetur nostrum quidem minus ipsam eius quo debitis cupiditate explicabo aspernatur, consequuntur necessitatibus. Neque eum illo ullam rem! Tempora, commodi aliquam? </p>
                <a href="./MedicalDashboard.php" class="btn btn-open">Open <i class="fa-solid fa-arrow-right"></i></a>
            
            </div>
        </div>
    </div>
</section>

<!-- call footer file-->
<?php include "footer.php" ?>

<!-- javascript files -->
    <script src="javascript/jquery-3.6.0.min.js"></script>
    <script src="javascript/bootstrap.bundle.js"></script>
    <script src="javascript/Dashboard-Pages-js/dashboards.js"></script>
</body>
</html>