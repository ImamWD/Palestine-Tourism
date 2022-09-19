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
       
        <a href="./login.php" class="btn login-btn">Login</a>
        <a  href="./signup.php" class="btn signup-btn">Sign up</a>
        
            </div>
           
        </div>
    </section>

  </header>
  <section class="container">
    <h2 style="margin-top:50px">Explore Top Destinations</h2>
    <div class="Top-Dests">
        <div  class="Top-Dest">
            <img style="width:100%" src="images/home-images/p-alpha1.png" />
            <div class="time">
                <i class="fa-regular fa-clock"></i> 2 Day  & 1 Night
            </div>
            <h5>Etiam placerat dictum consequat an Pellentesque habitant morbi.</h5>
            <button class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></button>
            <h5><span class="price">$79.00</span> per person</h5>
        </div>
        <div  class="Top-Dest">
            <img style="width:100%" src="images/home-images/p-alpha2.png" />
            <div class="time">
                <i class="fa-regular fa-clock"></i> 8 Day  & 7 Night
            </div>
            <h5>varius condimentum consequat frin Aenean pretium risus eu.</h5>
            <button class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></button>
            <h5><span class="price">$259.00</span> per person</h5>
        </div>
        <div  class="Top-Dest">
            <img style="width:100%" src="images/home-images/p-alpha3.png" />
            <div class="time">
                <i class="fa-regular fa-clock"></i> 5 Day  & 4 Night
            </div>
            <h5>Praesent sed elit mi. In risus nullaam efficitur non elementum eget.</h5>
            <button class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></button>
            <h5><span class="price">$179.00</span> per person</h5>
        </div>
    </div>
  </section>
  <?php include "footer.php" ?>
      <script src="javascript/jquery-3.6.0.min.js"></script>
     <script src="javascript/bootstrap.bundle.js"></script>
     <script src="javascript/home.js"></script>
</body>
</html>