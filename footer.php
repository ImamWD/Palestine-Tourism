<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/footer.css">
    <title>>Palestine Tourism</title>
</head>
<body>
    <footer>
        <div class="top-footer container">
            <div class="col-3 footer-content">
                <h3 class="h3-footer">Follow Us On:</h3>
                <div>
                    <a href="#"><i class="fa-brands fa-facebook-f IC"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter IC"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in IC"></i></a>
                    <a href="#"><i class="fa-solid fa-basketball IC"></i></a>
                </div>
                <p class="footer-para">Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt molestie turpis nec lacinia vehicula.</p>
            </div>
            <div class="col-3 footer-content">
                <h3 class="h3-footer" >Quick Link</h3>
                <?php
                if(isset($_SESSION['customer']))
                { ?>
                <a class="quick-link"  href="./index.php">Home</a>
                <a class="quick-link" href="./ReligiousTours.php">Tours</a>
                <a class="quick-link" href="./BlogsHome.php">Blogs</a>
                <a class="quick-link Contact" href="#">Contact us</a>
                <?php }
                else
                { ?>
                 <a class="quick-link" href="./index.php">Home</a>
                <a class="quick-link" href="./index.php">Tours</a>
                <a class="quick-link" href="./index.php">Blogs</a>
                <a class="quick-link" href="index.php">Contact us</a>
                <?php } ?>
            </div>
            <div class="col-3 footer-content">
                <h3 class="h3-footer">Tour Type</h3>
                <?php
                if(isset($_SESSION['customer']))
                { ?>
                <a class="quick-link" href="./ReligiousTours.php">Religious</a>
                <a class="quick-link" href="./CulturalTours.php">Cultural</a>
                <a class="quick-link" href="./LeisureTours.php">Leisure</a>
                <a class="quick-link" href="./MedicalTours.php">Medical</a>
                <?php 
                }
                elseif(isset($_SESSION['admin']))
                {?> 
                
                <a class="quick-link" href="./ReligiousDashboard.php">Religious</a>
                <a class="quick-link" href="./CulturalDashboard.php">Cultural</a>
                <a class="quick-link" href="./LeisureDashboard.php">Leisure</a>
                <a class="quick-link" href="./MedicalDashboard.php">Medical</a>
                <?php 
                }
                else { ?>
                <a class="quick-link" href="./login.php">Religious</a>
                <a class="quick-link" href="./login.php">Cultural</a>
                <a class="quick-link" href="./login.php">Leisure</a>
                <a class="quick-link" href="./login.php">Medical</a>
                

                <?php } ?>
            </div>
            <div lass="col-3 footer-content" style="width:25%">
                <h3 class="h3-footer">Gallery</h3>
                <div class="footer-image-div container">
                    <div class="row">
                    <img src="images/footer-images/fg-1.png" class="footer-image col-4" />
                    <img src="images/footer-images/fg-2.png" class="footer-image col-4" />
                    <img src="images/footer-images/fg-3.png" class="footer-image col-4" />
                    <img src="images/footer-images/fg-4.png" class="footer-image col-4" />
                    <img src="images/footer-images/fg-5.png" class="footer-image col-4" />
                    <img src="images/footer-images/fg-6.png" class="footer-image col-4" />
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <p class="copyright" style="color:white ;">Copyright 2022 Palestine Tourism </p>
            <div class="footer-logo">
                <a style="color:white ; display: inline-block;" class="navbar-brand" href="index.php"><img src="images/home-images/airplane-57-48.ico" style="width:50px" /> Palestine <span style="color:#ff4838 ;">Tourism</span></a>
            </div>
            <p class="bottom-footer-para" style="color:white ;">Design By <span class="vir-line"> | </span> Imam Ibrahim</p>
        </div>
    </footer>
    <script src="javascript/navbar.js"></script>
</body>
</html>