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
  <section >
    <h2 class="container" style="margin-top:50px; margin-bottom: 50px;">Explore Top Destinations</h2>
    
    <section class="container slider">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row" style="justify-content: space-between;">
                <div  class="Top-Dest col-3">
                    <img style="width:100%" src="images/home-images/p-alpha1.png" />
                    <div class="time">
                        <i class="fa-regular fa-clock"></i> <span>8:00</span> to <span>22:30</span>
                    </div>
                    <h5 calss="place-name">Etiam placerat dictum consequat an Pellentesque habitant morbi.</h5>
                    
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Type: </span> Leisure</h6>
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Location: </span> Nablus</h6>
        
                    <a href="./BookNow.php" class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></a>
                    <h5><span class="price">$79.00</span> per person</h5>
                </div>
        
                <div  class="Top-Dest col-3">
                    <img style="width:100%" src="images/home-images/p-alpha2.png" />
                    <div class="time">
                        <i class="fa-regular fa-clock"></i> <span>10:00</span> to <span>20:00</span>
                    </div>
                    <h5>varius condimentum consequat frin Aenean pretium risus eu.</h5>
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Type: </span> Leisure</h6>
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Location: </span> Nablus</h6>
        
                    <a href="./BookNow.php"  class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></a>
                    <h5><span class="price">$259.00</span> per person</h5>
                </div>
                
                <div  class="Top-Dest col-3">
                  <img style="width:100%" src="images/home-images/p-alpha4.png" />
                  <div class="time">
                      <i class="fa-regular fa-clock"></i> <span>8:00</span> to <span>24:00</span>
                  </div>
                  <h5>Praesent sed elit mi. In risus nullaam efficitur non elementum.</h5>
                  <h6 class="Place-Type"><span style="color:#ff4838 ;">Type: </span> Leisure</h6>
                  <h6 class="Place-Type"><span style="color:#ff4838 ;">Location: </span> Nablus</h6>
      
                  <a href="./BookNow.php" class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></a>
                  <h5><span class="price">$199.00</span> per person</h5>
              </div>
            </div>
            </div>
            <div class="carousel-item">
              <div class="row" style="justify-content: space-between;">
               
                <div  class="Top-Dest col-3">
                    <img style="width:100%" src="images/home-images/p-alpha2.png" />
                    <div class="time">
                        <i class="fa-regular fa-clock"></i> <span>10:00</span> to <span>20:00</span>
                    </div>
                    <h5>varius condimentum consequat frin Aenean pretium risus eu.</h5>
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Type: </span> Leisure</h6>
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Location: </span> Nablus</h6>
        
                    <a href="./BookNow.php" class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></a>
                    <h5><span class="price">$259.00</span> per person</h5>
                </div>
                <div  class="Top-Dest col-3">
                    <img style="width:100%" src="images/home-images/p-alpha3.png" />
                    <div class="time">
                        <i class="fa-regular fa-clock"></i> <span>8:00</span> to <span>22:30</span>
                    </div>
                    <h5>Praesent sed elit mi. In risus nullaam efficitur non elementum.</h5>
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Type: </span> Leisure</h6>
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Location: </span> Nablus</h6>
        
                    <a href="./BookNow.php" class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></a>
                    <h5><span class="price">$179.00</span> per person</h5>
                </div>
    
                <div  class="Top-Dest col-3">
                  <img style="width:100%" src="images/home-images/p-alpha4.png" />
                  <div class="time">
                      <i class="fa-regular fa-clock"></i> <span>8:00</span> to <span>24:00</span>
                  </div>
                  <h5>Praesent sed elit mi. In risus nullaam efficitur non elementum.</h5>
                  <h6 class="Place-Type"><span style="color:#ff4838 ;">Type: </span> Leisure</h6>
                  <h6 class="Place-Type"><span style="color:#ff4838 ;">Location: </span> Nablus</h6>
      
                  <a href="./BookNow.php" class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></a>
                  <h5><span class="price">$199.00</span> per person</h5>
              </div>
            </div>
            </div>
            <div class="carousel-item">
              <div class="row" style="justify-content: space-between;">
                <div  class="Top-Dest col-3">
                    <img style="width:100%" src="images/home-images/p-alpha1.png" />
                    <div class="time">
                        <i class="fa-regular fa-clock"></i> <span>8:00</span> to <span>22:30</span>
                    </div>
                    <h5 calss="place-name">Etiam placerat dictum consequat an Pellentesque habitant morbi.</h5>
                    
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Type: </span> Leisure</h6>
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Location: </span> Nablus</h6>
        
                    <a href="./BookNow.php" class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></a>
                    <h5><span class="price">$79.00</span> per person</h5>
                </div>
        
                <div  class="Top-Dest col-3">
                    <img style="width:100%" src="images/home-images/p-alpha3.png" />
                    <div class="time">
                        <i class="fa-regular fa-clock"></i> <span>8:00</span> to <span>22:30</span>
                    </div>
                    <h5>Praesent sed elit mi. In risus nullaam efficitur non elementum.</h5>
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Type: </span> Leisure</h6>
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Location: </span> Nablus</h6>
        
                    <a href="./BookNow.php" class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></a>
                    <h5><span class="price">$179.00</span> per person</h5>
                </div>
    
                <div  class="Top-Dest col-3">
                  <img style="width:100%" src="images/home-images/p-alpha4.png" />
                  <div class="time">
                      <i class="fa-regular fa-clock"></i> <span>8:00</span> to <span>24:00</span>
                  </div>
                  <h5>Praesent sed elit mi. In risus nullaam efficitur non elementum.</h5>
                  <h6 class="Place-Type"><span style="color:#ff4838 ;">Type: </span> Leisure</h6>
                  <h6 class="Place-Type"><span style="color:#ff4838 ;">Location: </span> Nablus</h6>
      
                  <a href="./BookNow.php" class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></a>
                  <h5><span class="price">$199.00</span> per person</h5>
              </div>
            </div>
            </div>
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

  <section >
    <h2 class="container" style="margin-top:50px">For You</h2>
    <div class="Top-Dests container">
        <div class="row" style="justify-content: space-between;">
        <div  class="Top-Dest col-4">
            <img style="width:100%" src="images/home-images/p-alpha1.png" />
            <div class="time">
                <i class="fa-regular fa-clock"></i> <span>8:00</span> to <span>22:30</span>
            </div>
            <h5 calss="place-name">Etiam placerat dictum consequat an Pellentesque habitant morbi.</h5>
            
            <h6 class="Place-Type"><span style="color:#ff4838 ;">Type: </span> Leisure</h6>
            <h6 class="Place-Type"><span style="color:#ff4838 ;">Location: </span> Nablus</h6>

            <a href="./BookNow.php" class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></a>
            <h5><span class="price">$79.00</span> per person</h5>
        </div>

        <div  class="Top-Dest col-4">
            <img style="width:100%" src="images/home-images/p-alpha2.png" />
            <div class="time">
                <i class="fa-regular fa-clock"></i> <span>10:00</span> to <span>20:00</span>
            </div>
            <h5>varius condimentum consequat frin Aenean pretium risus eu.</h5>
            <h6 class="Place-Type"><span style="color:#ff4838 ;">Type: </span> Leisure</h6>
            <h6 class="Place-Type"><span style="color:#ff4838 ;">Location: </span> Nablus</h6>

            <a href="./BookNow.php"class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></a>
            <h5><span class="price">$259.00</span> per person</h5>
        </div>
        <div  class="Top-Dest col-4">
            <img style="width:100%" src="images/home-images/p-alpha3.png" />
            <div class="time">
                <i class="fa-regular fa-clock"></i> <span>8:00</span> to <span>22:30</span>
            </div>
            <h5>Praesent sed elit mi. In risus nullaam efficitur non elementum.</h5>
            <h6 class="Place-Type"><span style="color:#ff4838 ;">Type: </span> Leisure</h6>
            <h6 class="Place-Type"><span style="color:#ff4838 ;">Location: </span> Nablus</h6>

            <a href="./BookNow.php" class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></a>
            <h5><span class="price">$179.00</span> per person</h5>
        </div>
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