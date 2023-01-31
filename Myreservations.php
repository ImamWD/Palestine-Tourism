<?php 
session_start(); 
if(!isset($_SESSION['customer']))
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
            <th scope="col">Status</th>
              <th scope="col">Place</th>
              <th scope="col">Type</th>
              <th scope="col">NOP</th>
              <th scope="col">Start</th>
              <th scope="col">End</th>
              <th scope="col">Date</th>
              <th scope="col">Total</th>
              <th scope="col">Image</th>
              <th scope="col">Events</th>
            </tr>
          </thead>
          <tbody>
           
            <?php 
            // include conniction page
             include "./backendfiles/conniction.php";
             // sql query , get data 
             $query = "SELECT places.name ,
             places.Type , 
             customersplaces.NumOP ,
             customersplaces.Starttime ,
             customersplaces.Endtime ,
             customersplaces.Cerated ,
             places.cost ,
             places.imageurl ,
             customersplaces.visited FROM customersplaces 
             INNER JOIN places ON places.id = customersplaces.Place_Id 
             WHERE customersplaces.Customer_Id = ".$_SESSION['customer']." ORDER BY  customersplaces.Cerated DESC, customersplaces.visited ;";
             // request at the server
             $Result = mysqli_query($conn,$query);
             //for to result values in matrix
             $DATA = mysqli_fetch_all($Result);
             ?>
            <!--php for loop-->
            <?php
            $i=0;
            foreach($DATA as $val)
            {
              // compare to current date 
             $dateTimestamp1 = strtotime($val[5]);
             $date2 =  date("Y-m-d");
             $dateTimestamp2 = strtotime($date2);

             //select background color for to visited , not visited , wait and leat.
             if($dateTimestamp1 < $dateTimestamp2 && $val[8] == 0)
             {
            ?>
            <tr style=" background-color:#dc354555">
            <td  scope="col" style="color:red; font-weight:500; " >Late </td>
            <?php 
             }
             else if($val[8] == 1 && $dateTimestamp1 < $dateTimestamp2)
             { ?>
              <tr style="background-color:#1a855355">
              <td  scope="col" style="color:green; font-weight:500; " >Visited </td>
  
            <?php 
             } 
             else
             { ?>
             <tr>
             <td  scope="col" style=" font-weight:500; " >Waiting </td>
             <?php 
             }// end background color for visited ,not visited ,wait and leat
             ?>
              <td scope="col"><?php echo  $val[0]?> </td>
             
              <td scope="col"><?php echo $val[1] ?></td>
              <td scope="col"><?php echo $val[2] ?></td>
              <?php
              $Start = explode(':' , $val[3]);
              $End = explode(':' , $val[4]);
              ?>
              <td scope="col"><?php echo $Start[0].":".$Start[1] ?></td>
              <td scope="col"><?php echo $End[0].":".$End[1] ?></td>
              <td scope="col"><?php echo $val[5] ?></td>

              <td scope="col"><?php echo $val[6]*$val[2] ?> <span style="color:#ff4838 ;">$</span></td>
             
              <?php $impurl = "./backendfiles/Placeuploads/".$val[7] ?>
              <td style="width:10%;"><button title="Place Image" onclick="showimg('<?php echo $impurl ?>' )" class="btn btn-success btn-table"><i class="fa-regular fa-image"></i> </button></td>
            
             <?php
              if($dateTimestamp1 > $dateTimestamp2)
              {
              ?>
              <td style="width:10%;">
              <a title="Print Ticket" href="./Ticket.php"  class="btn btn-warning btn-table"><i class="fa-solid fa-check" style="color:white" ></i> </a>
              <a title="Cancel Order" href="./Ticket.php"  class="btn btn-danger btn-table"> <i class="fa-solid fa-xmark"></i> </a> 
              </td>
              <?php
              }
              else
              { ?>
              <td style="width:10%;">
                  <a title="Reuse Order" href="./Ticket.php"  class="btn btn-secondary btn-table"> <i class="fa-solid fa-recycle"></i> </a>
                  <a title="Delete Order" href="./Ticket.php"  class="btn btn-danger btn-table"> <i class="fa-solid fa-trash"></i> </a>
                </td>
              <?php
              }?>
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