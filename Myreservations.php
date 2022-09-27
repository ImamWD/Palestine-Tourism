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
<body>
    <?php include "navbar.php" ?>
    <div class="container conta">    
      <div class="Dash-div container">
       <div class="header-div"><h3 class="dash-header">My Reservations</h3></div>
       <div class="card text-center">
        <div class="table-div">
          <form method="POST" class="search-form">
            <input type="search" name="Research" class="form-control search-input" placeholder="Enter item name"/>
            <input type="submit" class="btn search-submit" value="Search" name="sib"/>
          </form>
        </div>
        <table class="table">
          <thead>
            <tr>
            <th scope="col">#</th>
              <th scope="col">My Name</th>
              <th scope="col">Place</th>
              <th scope="col">Type</th>
              <th scope="col">Persons</th>
              <th scope="col">Total</th>
              <th scope="col">Ticket</th>
              <th scope="col">Image</th>
            </tr>
          </thead>
          <tbody>
           
            <?php 
             $CustomerName = "Ahmad Tamem";
             $PlaceName = "Abbbb";
             $PlaceType = "Leisure";
             $NumOfPerson = 5;
             $ImagePath = "./images/home-images/p-alpha1.png";
             $TotalSalary = 500;

             ?>
            <!--php for loop-->
            <?php
           
            $Count = 10;
            for($i =0;$i < $Count ; $i = $i+1)
            {
              ?>
            <tr id="<?php echo $i ?>">
              <td  scope="col"><?php echo $i+1 ?></td>
              <td scope="col"><?php echo $CustomerName ?></td>
              <td scope="col"><?php echo  $PlaceName ?> </td>
              <td scope="col"><?php echo $PlaceType ?></td>
              <td scope="col"><?php echo $NumOfPerson ?></td>
              <td scope="col"><?php echo $TotalSalary ?> <span style="color:#ff4838 ;">$</span></td>
              <td style="width:10%;"><a href="./Ticket.php"  class="btn btn-warning btn-table"> <i class="fa-solid fa-table-list"></i> </a></td>
              <td scope="col"> <img src="<?php echo  $ImagePath ?>" style="width:50%;;" /></td>
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
    <script src="javascript/Myreservations.js"></script>
</body>
</html>