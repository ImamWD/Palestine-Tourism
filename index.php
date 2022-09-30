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
  <section >
    <h2 class="container" style="margin-top:50px">Explore Top Destinations</h2>
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

            <button class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></button>
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

            <button class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></button>
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

            <button class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></button>
            <h5><span class="price">$179.00</span> per person</h5>
        </div>
    </div>
    </div>
    
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

            <button class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></button>
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

            <button class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></button>
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

            <button class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></button>
            <h5><span class="price">$179.00</span> per person</h5>
        </div>
    </div>
    </div>
    
  </section>
  <?php include "footer.php" ?>
     <script src="javascript/jquery-3.6.0.min.js"></script>
     <script src="javascript/bootstrap.bundle.js"></script>
     <script src="javascript/home.js"></script>
</body>
</html>