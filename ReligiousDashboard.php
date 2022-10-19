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
       <div class="header-div"><h3 class="dash-header">Religious Dashboard</h3></div>
       <div class="card text-center">
        <ul class="nav nav-tabs">
        <li class="nav-item ">
            <a class="nav-link dash-link active" aria-current="page" href="./ReligiousDashboard.php">Religious</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link dash-link" href="./CulturalDashboard.php">Cultural</a>
          </li>
          <li class="nav-item">
            <a class="nav-link dash-link" href="./LeisureDashboard.php">Leisure</a>
          </li>
          <li class="nav-item">
            <a class="nav-link dash-link" href="./MedicalDashboard.php">Medical</a>
          </li>
        </ul>

        <div class="table-div">
          <form action="./ReligiousDashboard.php" method="POST" class="select-form">
          <select  name="selector" class="form-control me-2">
          <option selected value="1">Explore</option>
          <option value="2">-Explore</option>
          <option value="3">Name</option>
          <option value="5">Cost</option>
          <option value="6">-Cost</option>
          <option value="7">Start Time</option>
          <option value="8">-Start Time</option>
          <option value="9">Close Time</option>
          <option value="10">-Close Time</option>
          </select>
            <input type="submit" class="btn search-submit" value="show" name="sub"/>
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
          $PlaceType = "Religious";
           if(isset($_POST['selector']))
           {
               $sl = $_POST['selector'];
               if($sl == 1)
               {
                   $order= "-explore";
               }
               elseif($sl ==2)
               {
                   $order ="explore";
               }
               elseif($sl == 3)
               {
                   $order ="name";
               }
               elseif($sl ==5)
               {
                   $order = "-cost";
               }
               elseif($sl == 6)
               {
                   $order = "cost";
               }
               elseif($sl ==7)
               {
                   $order = "-starttime";
               }
               elseif($sl ==8)
               {
                   $order = "starttime";
               }
               elseif($sl ==9)
               {
                   $order = "-closetime";
               }
               else
               {
                  $order = "closetime";
               }
               $query = "SELECT * from places where type = '" . $PlaceType . "' ORDER BY ". $order .";";
               $result = mysqli_query($conn,$query);
               $Arr = mysqli_fetch_all($result);
               $co=0;
           }
           else
           {
            include "./backendfiles/conniction.php";
            include "./backendfiles/orderby.php";
           }
          foreach($Arr as $value)
            {
              $starttime =explode(":",$value[4]);
              $endtime =explode(":",$value[5]);
              ?>
            <tr>
            <td><a href="./Reservations.php" class="btn btn-warning btn-table" ><i class="fa-solid fa-list-check"></i></a></td>
            <td scope="col"><?php echo $co+=1 ?></td>
            <?php if($value[8])
              {?>
            <td> <div class="bg-success Explore"></div> </td>
            <?php
              }
              else
              { ?>
            <td> <div class="bg-danger NotExplore"></div> </td>
            <?php } ?>
              <td scope="col"><?php echo $value[1] ?></td>
              <td scope="col"><?php echo  $value[2] ?> <span style="color:#ff4838 ;">$</span></td>
              <td scope="col"><?php echo $value[3] ?></td>
              <td scope="col"><?php echo $value[4] ?></td>
              <td scope="col"><?php echo $value[5]?></td>
              <td style="margin:auto;"><button onclick='ShowDesc(" <?php echo$value[6] ?> " , " <?php echo $value[1] ?> ")'  class="btn btn-secondary btn-table" ><i class="fa-solid fa-file-medical"></i></button></td>
              <td style="margin:auto;"><button onclick='ShowImage("./backendfiles/Placeuploads/<?php echo $value[7] ?> "," <?php echo $value[1] ?> ")' class="btn btn-secondary btn-table" ><i class="fa-regular fa-image"></i></button></td>
              <td style="width:10%;"><button onclick='EditPlaceForm("<?php echo $value[1] ; ?>", "<?php  echo $value[2]; ?>", "<?php  echo $value[6]; ?>", <?php  echo $starttime[0]; ?>, <?php  echo $starttime[1]; ?>, <?php echo $endtime[0]; ?>,<?php  echo $endtime[1]; ?> , <?php echo $value[8]; ?>,"<?php echo $value[3] ?>"," <?php echo $value[0] ?>")'  class="btn btn-info btn-table"> <i style="color:white ;" class="fa-solid fa-pen"></i></button></td>
              <td style="width:10%;"><a href="./backendfiles/deleteplace.php?id=<?php echo $value[0] ?>&pid=0"  class="btn btn-danger btn-table"> <i class="fa-solid fa-trash"></i> </a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
    <?php include "footer.php" ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.min.js" integrity="sha512-F3F53+tMh/CBxMQ60GN5R4EiFW7PcuND+9IDC3Qpkwc7SfxgzHigRdUO3+2+mNal2ot3Wp6KR0zx8r8BbsW+Bg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="javascript/jquery-3.6.0.min.js"></script>
    <script src="javascript/bootstrap.bundle.js"></script>
    <script src="javascript/Dashboard-Pages-js/ReligiousDashboard.js"></script>
    <script src="javascript/Dashboard-Pages-js/Error.js"></script>
</body>
</html>