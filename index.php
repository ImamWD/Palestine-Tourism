<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestine Tourism</title>
    <link rel="stylesheet" href="style/all.min.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">


</head>
<body>
  <!--Navebar for all pages ...-->
  <?php include "navbar.php"?>
      <!--End Navebar-->

  <!--header-->
  <header class="container-fluid">
    <section class="row">
        <div class="col-6 left-header">
        </div>
        <div class="col-6 right-header">
        
        <div class="into-header col-12">
        <p id="auto-write"></p>   
        <p id="auto-write-Tourism"></p>
       <?php
       if(isset($_SESSION['customer']))
       { 
        
        include "backendfiles/conniction.php";
        $query = "SELECT name from customers where id=" . $_SESSION['customer'] .";";
        $result = mysqli_query($conn , $query);
        $row = $result->fetch_assoc();
        $Cu_Name = $row['name'];
       ?>
        <a href="./ReligiousTours.php" class="btn login-btn">GO TO TOURS</a>
        <h3 class="mt-5 w-100" style="color:white; text-align:center "> Welcome<span style="color:#ff4838"> <?php echo $Cu_Name; ?> </span> to the Palestine Tourism </h3>

      <?php }
       elseif(isset($_SESSION['admin']))
       { ?>
       <?php
         include "backendfiles/conniction.php";
        $query = "SELECT name from admins where id=" . $_SESSION['admin'] .";";
        $result = mysqli_query($conn , $query);
        $row = $result->fetch_assoc();
        $Ad_Name = $row['name'];
       ?>
        <a href="./dashboards.php" class="btn login-btn">GO TO DASHS</a>
        <h5 class="mt-5 w-100" style="color:white; text-align:center"> welcome <span style="color:#ff4838"> <?php echo $Ad_Name; ?> </span> Admin go to Dashpoards for to Manage website</h6>
       <?php }
       else
       { ?>
        <a href="./login.php" class="btn login-btn">Login</a>
        <a  href="./signup.php" class="btn signup-btn">Sign up</a>
        <?php } ?>
        </div>
           
        </div>
    </section>

  </header>
  <?php 
  if(isset($_SESSION['customer']))
  {
    ?>




  <!-- Explor slider --> 
  <section >
    <h2 class="container" style="margin-top:50px; margin-bottom: 50px;">Explore Top Destinations</h2>
    
    <section class="container slider">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <?php 
              include "./backendfiles/conniction.php";
              $query = "SELECT * FROM places WHERE explore = 1";
              $result = mysqli_query($conn , $query);
              $Arr = mysqli_fetch_all($result); 
              $counter1 = 0;
              $counter2 =1;
              foreach($Arr as $v)
              {
                if($counter1%3 == 0 && $counter1 != 0)
                {
              ?>
                   <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $counter2; ?>" aria-label="Slide <?php echo $counter2; ?>"></button>
          <?php 
          $counter2++;
        }
        $counter1++;
        } ?>
        
        </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row" style="justify-content: space-between;">
              <?php 
              $counter =0;
              foreach($Arr as $value)
              {
                if($counter % 3 == 0 && $counter != 0)
                {
                  ?>
                  <div class="carousel-item ">
                  <div class="row" style="justify-content: space-between;">
                  <?php
                }
              ?>
                <div  class="Top-Dest col-3">
                    <img style="width:100%" src="./backendfiles/Placeuploads/<?php echo $value[7] ?>" />
                    <div class="time">
                        <i class="fa-regular fa-clock"></i> <span><?php echo $value[4] ?> </span> to <span><?php echo $value[5] ?></span>
                    </div>
                    <h5 calss="place-name"><?php echo $value[1] ?></h5>
                    
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Type: </span> <?php echo $value[9] ?></h6>
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Location: </span> <?php echo $value[3] ?></h6>
        
                    <a href="./BookNow.php?placeId=<?php echo $value[0] ?>" class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></a>
                    <h5><span class="price">$<?php echo $value[2] ?> </span> per person</h5>
                </div>
                <?php
              $counter++;
              if($counter%3 == 0 )
                {
                  ?>
                  </div>
                  </div>
                  <?php
                }

              }
              if($counter%3 != 0)
              {
              ?>
              </div>
              </div>
          <?php } ?>
                </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
    
  
    </section>
  <section > <!-- For you div -->
    <h2 class="container" style="margin-top:50px">For You</h2>
    <div class="Top-Dests container">
        <div class="row w-100" style="justify-content: space-between;">
        <?php
        // get user location because display places for this location
        $usrquery = "SELECT location FROM customers WHERE id = '". $_SESSION['customer'] ."';";
        $result = mysqli_query($conn , $usrquery);
        $location = mysqli_fetch_all($result);
        // display all places for this location 
        $placequery = "SELECT * FROM places WHERE location = '". $location[0][0] ."';";
        $placeResult = mysqli_query($conn,$placequery);
        $placeArr = mysqli_fetch_all($placeResult);
        foreach($placeArr as $value)
        {
        ?>
        <div  class="Top-Dest col-4">
            <img style="width:100%" src="./backendfiles/Placeuploads/<?php echo $value[7] ?>" />
            <div class="time">
                <i class="fa-regular fa-clock"></i> <span> <?php echo $value[4] ?> </span> to <span><?php echo $value[5] ?></span>
            </div>
            <h5 calss="place-name"><?php echo $value[1] ?></h5>
            
            <h6 class="Place-Type"><span style="color:#ff4838 ;">Type: </span> <?php echo $value[9] ?></h6>
            <h6 class="Place-Type"><span style="color:#ff4838 ;">Location: </span> <?php echo $value[3] ?></h6>

            <a href="./BookNow.php?placeId=<?php echo $value[0] ?>" class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></a>
            <h5><span class="price">$<?php echo $value[2] ?></span> per person</h5>
        </div>
      <?php }?>
    </div>
    </div>
  </section>
  <?php 
  } 
  include "footer.php" ?>
     <script src="javascript/jquery-3.6.0.min.js"></script>
     <script src="javascript/bootstrap.bundle.js"></script>
     <script src="javascript/home.js"></script>
</body>
</html>