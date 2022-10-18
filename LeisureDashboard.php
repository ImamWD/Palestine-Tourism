<?php 
session_start(); 
if(!isset($_SESSION['admin']))
{
    header("Location:./login.php");
}
?>
<!-- pleace make sure your PC to connict for network -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestine Tourism</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.css" rel="stylesheet">
    <link rel="stylesheet" href="style/all.min.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/Dashboard-pages-css/ReligiousDashboard.css">
</head>
<body <?php if(isset($_GET['err'])){?>
   onload="Error('<?php echo $_GET['err'];  ?>')"<?php } ?>
   <?php if(isset($_GET['done'])) {?>
   onload="Done('<?php echo $_GET['done']; ?>')" <?php } ?>>

    <?php include "navbar.php" ?>
    <div class="container conta">    
      <div class="Dash-div container">
       <div class="header-div"><h3 class="dash-header">Leisure Dashboard</h3></div>
       <div class="card text-center">
        <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link dash-link" aria-current="page" href="./ReligiousDashboard.php">Religious</a>
          </li>
          <li class="nav-item">
            <a class="nav-link dash-link" href="./CulturalDashboard.php">Cultural</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link dash-link active" href="./LeisureDashboard.php">Leisure</a>
          </li>
          <li class="nav-item">
            <a class="nav-link dash-link" href="./MedicalDashboard.php">Medical</a>
          </li>
        </ul>
        <div class="table-div">
          <form method="POST" class="search-form">
            <input type="search" name="Research" class="form-control search-input" placeholder="Enter item name"/>
            <input type="submit" class="btn search-submit" value="Search" name="sib"/>
          </form>
          <div class="add-new-div">
            <button onclick="newPlaceForm()" class="btn btn-success me-1" ><i class="fa-regular fa-square-plus"></i></button>
          </div>
        </div>
        <table class="table">
          <thead>
            <tr>
            <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col">Exp</th>
              <th scope="col">Name</th>
              <th scope="col">Cost</th>
              <th scope="col">Location</th>
              <th scope="col">Start</th>
              <th scope="col">Close</th>
              <th scope="col">desc</th>
              <th scope="col">Image</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
           
            <?php 
            //for image
             $Path = "\"./images/home-images/p-alpha1.png\""; 
             // get your place image in DB and you can define array for to get all images.
             $PlaceName = "\"Abbbbb\""; // test php variable for js
             $PlaceNameST = "Abbbbb";
             //for description
             $Description = "\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus veniam veritatis ab nostrum dicta debitis nisi alias, sit quia asperiores est totam mollitia ex soluta iusto deleniti quisquam ad amet \"";
             // for Edit function 
             $PlaceCost = 300;
             $Location = "Nablus";
             $h1 = 5;
             $m1 = 30;
             $h2 = 10;
             $m2 = 40;
             $Explore = true;
             
             ?>
            <!--php for loop-->
            <?php
            //ReligiousDB row count
            $ReligiousDBCount = 10;
            for($i =0;$i < $ReligiousDBCount ; $i = $i+1)
            {
              ?>
            <tr>
            <td><a href="./Reservations.php" class="btn btn-warning btn-table" ><i class="fa-solid fa-list-check"></i></a></td>            <td scope="col"><?php echo $i+1 ?></td>
              <?php if($Explore) {
              echo '<td> <div class="bg-success Explore"></div> </td>';
              }else {
              echo'<td> <div class="bg-danger NotExplore"></div> </td>';
              }?>
              <td scope="col"><?php echo $PlaceNameST ?></td>
              <td scope="col"><?php echo  $PlaceCost ?> <span style="color:#ff4838 ;">$</span></td>
              <td scope="col"><?php echo $Location ?></td>
              <td scope="col"><?php echo $h1 ?>:<?php echo $m1 ?></td>
              <td scope="col"><?php echo $h2 ?>:<?php echo $m2 ?></td>
              <td style="margin:auto;"><button onclick='ShowDesc(<?php echo$Description ?> , <?php echo $PlaceName ?>)'  class="btn btn-secondary btn-table" ><i class="fa-solid fa-file-medical"></i></button></td>
              <td style="margin:auto;"><button onclick='ShowImage("./backendfiles/Placeuploads/IMG-634dc71cb626e6.88081540.png" , <?php echo $PlaceName ?>)' class="btn btn-secondary btn-table" ><i class="fa-regular fa-image"></i></button></td>
              <td style="width:10%;"><button onclick='EditPlaceForm(<?php echo $PlaceName ; ?>, <?php  echo $PlaceCost; ?>, <?php  echo $Description; ?>, <?php  echo $h1; ?>, <?php  echo $m1; ?>, <?php echo $h2; ?>,<?php  echo $m2; ?> , <?php echo $Explore; ?>)'  class="btn btn-info btn-table"> <i style="color:white ;" class="fa-solid fa-pen"></i></button></td>
              <td style="width:10%;"><button  class="btn btn-danger btn-table"> <i class="fa-solid fa-trash"></i> </button></td>
              <!--for backend dev:-> on click for add ,edit ,description and image buttons you can show all inputs in (ReligiousDashboard.js) file-->
            </tr>
            <?php
            }
            ?>
           <!-- End php loop -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
    <?php include "footer.php" ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.min.js" integrity="sha512-F3F53+tMh/CBxMQ60GN5R4EiFW7PcuND+9IDC3Qpkwc7SfxgzHigRdUO3+2+mNal2ot3Wp6KR0zx8r8BbsW+Bg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="javascript/jquery-3.6.0.min.js"></script>
    <script src="javascript/bootstrap.bundle.js"></script>
    <script src="javascript/Dashboard-Pages-js/LeisureDashboard.js"></script>
    <script src="javascript/Dashboard-Pages-js/Error.js"></script>
</body>
</html>