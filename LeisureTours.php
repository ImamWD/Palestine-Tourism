<?php 
session_start(); 
if(!isset($_SESSION['customer']))
{
    header("Location:./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestine Tourism</title>
    <link rel="stylesheet" href="style/all.min.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/Tours.css">
</head>
<body>

  <!--Navebar for all pages ...-->
  <?php include "navbar.php"?>
  <!--End Navebar-->
  <div class="conta">    
    <div class="Dash-div">
     <div class="card text-center">
      <ul class="nav nav-tabs">
      <li class="nav-item">
          <a class="nav-link dash-link" aria-current="page" href="./ReligiousTours.php">Religious</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link dash-link " href="./CulturalTours.php">Cultural</a>
        </li>
        <li class="nav-item">
          <a class="nav-link dash-link active" href="./LeisureTours.php">Leisure</a>
        </li>
        <li class="nav-item">
          <a class="nav-link dash-link" href="./MedicalTours.php">Medical</a>
        </li>
      </ul>
      <div>
        <div class="search-city">
          <h5 style="display:inline-block ;">Search with city</h5>
          <form method="POST" action="./LeisureTours.php" style="display:flex;  margin-left: 1%;width: 20%; justify-content: space-between;">
            <select name="city-selector" style="display:inline-block ; width: 70%;" class="form-select" aria-label="Default select example">
              <option selected value="Jerusalem">Jerusalem</option>
              <option value="Nablus">Nablus</option>
              <option value="Jenin">Jenin</option>
              <option value="Tulkarm">Tulkarm</option>
              <option value="Hebron">Hebron</option>
              <option value="Bethlehem">Bethlehem</option>
              <option value="Ramallah">Ramallah</option>
              <option value="Jericho">Jericho</option>
              <option value="Qalqilya">Qalqilya</option>
              <option value="Salfit">Salfit</option> 
              <option value="Tubas">Tubas</option>
            </select>
            <input type="submit" value="Search" class="btn btn-primary" name="Searchbtn" style="display:inline-block ;"/>
  
          </form>
        </div>
      </div>
      <section >
        
           
            <?php
            if(isset($_POST['city-selector']))
            {
              include "./backendfiles/conniction.php";
              $query = "SELECT * FROM places WHERE location = '" .$_POST['city-selector'] . "' and type ='Leisure'";
              $result = mysqli_query($conn,$query);
              ?>
                <h4 class="search-title" style="color:black; font-size:20px"><?php echo $_POST['city-selector'] ?> Leisure city</h4>
              <div class="Top-Dests">
              <div class="row w-100 m-auto" style=" justify-content: space-around;">
              
              <?php
              if($result->num_rows == 0)
              {

                ?>
                <h3>No search result, try in another city</h3>

              <?php 
              }
              else
              {
                $Arr = mysqli_fetch_all($result);
                foreach($Arr as $value)
                {
                ?>
               <div  class="Top-Dest col-3">
                    <img style="width:100%" src="./backendfiles/Placeuploads/<?php echo $value[7] ?>" />
                    <div class="time w-75">
                        <i class="fa-regular fa-clock"></i> <span><?php echo $value[4] ?> </span> to <span><?php echo $value[5] ?></span>
                    </div>
                    <h5 calss="place-name"><?php echo $value[1] ?></h5>
                    
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Type: </span> <?php echo $value[9] ?></h6>
                    <h6 class="Place-Type"><span style="color:#ff4838 ;">Location: </span> <?php echo $value[3] ?></h6>
        
                    <a href="./BookNow.php?placeId=<?php echo $value[0] ?>" class="btn book-btn">BOOK NOW <i class="fa-solid fa-arrow-right"></i></a>
                    <h5><span class="price">$<?php echo $value[2] ?> </span> per person</h5>
                </div>

              <?php 
                }
              }

            }
            else
            {
            ?>
             <h3 style="width:65%; margin-top: 30px; margin-right: auto; margin-left: auto;">From here you can search for a leisure place by city, choose a city and then click on the search button above</h3>
        <?php }
        if(isset($_POST['city-selector']))
        { ?>
            </div>
        </div>
        <?php } ?>
      </section>

      <div class="search-city">
        <h5 style="display:inline-block ;">Explore Place</h5>
        
      </div>

      <section>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <?php 
              include "./backendfiles/conniction.php";
              $query = "SELECT * FROM places WHERE explore = 1 and type = 'Leisure'";
              $result = mysqli_query($conn , $query);
              $Arr = mysqli_fetch_all($result); 
              $counter1 = 0;
              $counter2 =1;
              foreach($Arr as $v)
              {
                if($counter1%4 == 0 && $counter1 != 0)
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
                if($counter % 4 == 0 && $counter != 0)
                {
                  ?>
                  <div class="carousel-item ">
                  <div class="row" style="justify-content: space-between;">
                  <?php
                }
              ?>
                <div  class="Top-Dest col-3">
                    <img style="width:100%" src="./backendfiles/Placeuploads/<?php echo $value[7] ?>" />
                    <div class="time w-75">
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
              if($counter%4 == 0 )
                {
                  ?>
                  </div>
                  </div>
                  <?php
                }

              }
              if($counter%4 != 0)
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

    </div>
  </div>
</div>


  <?php include "footer.php" ?>

  <script src="javascript/jquery-3.6.0.min.js"></script>
  <script src="javascript/bootstrap.bundle.js"></script>
  <script src="javascript/Tours.js"></script>
</body>
</html>