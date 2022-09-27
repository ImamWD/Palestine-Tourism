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
        <?php $PlaceName = "Abbbb" ?>
       <div class="header-div"><h3 class="dash-header">Customers Reservations <?php echo $PlaceName ?> place</h3></div>
       <div class="card text-center">
        
        <div class="table-div">
          <form method="POST" class="search-form">
            <input type="search" name="Research" class="form-control search-input" placeholder="Enter item name"/>
            <input type="submit" class="btn search-submit" value="Search" name="sib"/>
          </form>
          <div class="add-new-div">
            <button class="btn btn-primary me-1 Bbb" >Submit </button>
            <button class="btn btn-danger me-1 Bbb" >Delete all Consumed</button>
          </div>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Consumed</th>
              <th scope="col">Key</th>
              <th scope="col">Customer</th>
              <th scope="col">Number of people</td>
              <th scope="col">Total</th>
              <th scope="col">Date</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
           
            <?php 
            $CustomerCount = 5;
            $Consumed = false;
            $TiketKey = "15532";
            $CustomerName = "Ahmad Tamem";
            $PeopleNum = 6;
            $TotalSalary=500;
            $TiketDate = "20-09-2022";
             ?>
            <!--php for loop-->
            <?php
           
            $ReligiousDBCount = 10;
            for($i =0;$i < $CustomerCount ; $i = $i+1)
            {
              ?>
            <tr>
              <?php if($Consumed) {
              echo '<td> <div class="Explore m-auto"></div> </td>';
              }else {
              echo'<td> <input type="checkbox" /> </td>';
              }?>
              <td scope="col"><?php echo $TiketKey ?></td>
              <td scope="col"><?php echo  $CustomerName ?></td>
              <td scope="col"><?php echo $PeopleNum ?></td>
              <td scope="col"><?php echo $TotalSalary ?>  <span style="color:#ff4838 ;">$</span></td>
              <td scope="col"><?php echo $TiketDate ?></td>
              <td style="width:10%;"><button  class="btn btn-danger btn-table"> <i class="fa-solid fa-trash"></i> </button></td>
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
    <script src="javascript/Dashboard-Pages-js/Reservations.js"></script>
</body>
</html>