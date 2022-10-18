<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestine Tourism</title>
    <link rel="stylesheet" href="style/navbar.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg " style="background-color:white">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="images/home-images/airplane-57-48.ico" style="width:50px" /> Palestine <span style="color:#ff4838 ;">Tourism</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <h4 class="Minu">List</h4>
            <span class="navbar-toggler-icon"></span>
           
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
           
          
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         
              <li class="nav-item Nav-items">
                <a class="nav-link into-Nav" aria-current="page" href="index.php">Home</a>
              </li>
             
              <?php
              if(isset($_SESSION['customer']))
              {
                ?>
              <li class="nav-item  Nav-items Pages">
                <a class="nav-link into-Nav"  href="#">
                    Pages  <i class="fa-solid fa-plus plus-icon"></i>
                </a>
                <ul class="dropdown-menu menu" >
                  <li class="list-item"><i class="fa-solid fa-circle"></i> <a class="dropdown-item dropdown-item1" href="./index.php">Home Page</a></li>
                  <li class="list-item"><i class="fa-solid fa-circle"></i> <a class="dropdown-item dropdown-item1"  href="./ReligiousTours.php">Tours Page</a></li>
                  <li class="list-item"><i class="fa-solid fa-circle"></i> <a class="dropdown-item dropdown-item1" href="./BlogsHome.php">Blogs Page</a></li> 
                </ul>
              </li>
              <li class="nav-item Nav-items">
                <a class="nav-link into-Nav" href="./ReligiousTours.php">Tours</a>
              </li>
              <li class="nav-item Nav-items">
                <a class="nav-link into-Nav" href="./BlogsHome.php">Blogs</a>
              </li>
              <li class="nav-item  Nav-items Contact" id="CO">
                <a class="nav-link into-Nav"  href="#">
                    Contact us  <i class="fa-solid fa-plus plus-icon"></i>
                </a>
                <ul class="dropdown-menu menu1"  style=" width: 52%; height:100vh ; border-radius: 0; border:0;">
                
                <li class="list-item" style="width:100% ; margin: auto; display:flex ; flex-direction: column;">
                  <h1 style="color:#ff4838;"> Contact Us</h1>
                  <form class="contact-form container" method="POST" style="width:100%;">
                    <label>Message Title</label>
                    <input type="text" name="titel" class="form-control mb-1"/>
                    <label>Your Name</label>
                    <input type="text" name="Name" class="form-control mb-1"/>
                    <label>Message</label>
                    <textarea style="height:30vh" name="msg" class="form-control mb-1"> </textarea>
                      <input type="submit" value="Send" class="btn  d-block book" name="send">
                  </form>
                </li>
                
              </ul>
              </li>
              <?php }
              if( isset($_SESSION['admin']))
              {
                ?>
              <li class="nav-item Nav-items">
                <a href="./dashboards.php" class="nav-link into-Nav">Dashboard</a>
              </li>
              <?php } ?>
              <?php
                if(isset($_SESSION['customer']))
                {
                  include "backendfiles/conniction.php";
                   $query = "SELECT name from customers where id=" . $_SESSION['customer'] .";";
                   $result = mysqli_query($conn , $query);
                   $row = $result->fetch_assoc();
                   $Cu_Name = $row['name'];
                  ?>
                  <li class="nav-item Nav-items d-flex PR">
                  <img src="./images/download1.png" class="profile-img1"/>
                  <a class="nav-link into-Nav prof d-inline" aria-current="page" > <?php echo $Cu_Name; ?></a>
                  </li>
                <?php
                 } 
                 if(isset($_SESSION['admin']))
                {
                  include "backendfiles/conniction.php";
                   $query = "SELECT name from admins where id=" . $_SESSION['admin'] .";";
                   $result = mysqli_query($conn , $query);
                   $row = $result->fetch_assoc();
                   $Ad_Name = $row['name'];
                  ?>
                  <li class="nav-item Nav-items d-flex PR">
                  <img src="./images/download1.png" class="profile-img1"/>
                  <a class="nav-link into-Nav prof d-inline" aria-current="page" > <?php echo $Ad_Name; ?></a>
                  </li>
                  <?php
                  }
                  ?>
            </ul>
            <div class="d-flex" >
              <?php 
              if(isset($_SESSION['customer']) || isset($_SESSION['admin']))
              { 
              ?>
              <a href="./logout.php" class="nav-link me-2 nav-item end-nav-items"> <i class="fa-solid fa-arrow-right-to-bracket"></i> Logout</a>
              <?php } 
              else 
              { ?>
              <a href="./login.php" class="nav-link me-2 nav-item end-nav-items"> <i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
               <?php
               }
               if(isset($_SESSION['customer'])) 
               {?>
              <a href="./Myreservations.php" class="nav-link nav-item end-nav-items" ><i class="fa-solid fa-list-check"></i>My reservations</a>
               <?php } ?>
              </div>
            </div>
            </div>
         
      </nav>
     <script src="javascript/navbar.js"></script>
</body>
</html>

