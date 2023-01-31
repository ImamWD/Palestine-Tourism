<?php
session_start();  
if(!isset($_SESSION['customer']))
{
    header("Location:./login.php");
}
else
{
    $customer_id = $_SESSION['customer'];
}

?>
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
    <link rel="stylesheet" href="style/Book.css">
</head>
<body>
    <?php include "navbar.php";

    if(isset($_GET['placeId']))
    {
        include "./backendfiles/conniction.php";
        $query = "SELECT * FROM places WHERE id = '" . $_GET['placeId'] ."';";
        $result = mysqli_query($conn , $query);
        $place = mysqli_fetch_all($result);
        $Start_T = explode(":",$place[0][4]);
        $End_T = explode(":",$place[0][5]);

       ?>
    <header class="BOOK-header">
       
       
        <div class="right-header container">
            <div class="Name-Location"> 
                <h1 class="Place-name"><?php echo $place[0][1]; ?></h1>
                <h1 class="location"><?php echo $place[0][3]; ?></h1>
            </div>
            <hr class="mb-5">
            <div class="left-header mb-5">
            <img src="./backendfiles/Placeuploads/<?php echo $place[0][7] ?> " class="Place-image"/>

        </div>
            <p class="Description"> <?php echo $place[0][6]; ?></p>
            <hr class="mb-5">
            <div class="Name-Location "> 
            <h4 class="price">Cost : <span style="color:#ff4838 ;"><?php echo $place[0][2]; ?> $ </span> Pre Person</h4>
            <h4 class="Time">Available : Form <span id="DBS" style="color:#ff4838 ;" class="Start-Time"><?php echo $Start_T[0] . ':' . $Start_T[1]  ?></span> to <span id="DBE" style="color:#ff4838 ;" class="End-Time"><?php echo $End_T[0] . ':' . $End_T[1]  ?></span></h4>
            </div>
        </div>
    </header>
    <div class="Recervation">
        <button class="btn show1" >Book now</button>
        <form method="POST" action="./backendfiles/handleBookNow.php?placeId=<?php echo $_GET['placeId'] ?>&customerId=<?php echo $customer_id ?>" class="w-100 form-reserve">
            <div class="DIVV">
                <label> Journey start </label>
                <input class="form-control" type="time" name="Start" id="ST" />
                <p style="color:red;" id="Serror" ></p>
                <label> Journey End</label>
                <input class="form-control" type="time" name="End" id="ED" />
                <p style="color:red;" id="Eerror" ></p>
            </div>
            <div class="DIVV">
                <label>Number Of Person</label>
                <input class="form-control" type="number" name="PerNum" id="PN" onkeyup="FTotal(this , '<?php echo $place[0][2]; ?>')"/>
                <p style="color:red;" id="PNerror" ></p>
            </div>
            <div class=" DIVV">
                <label>Journey Date</label>
                <input class="form-control" type="date" name="Date" id="DT" />
                <p style="color:red;" id="DTerror" ></p>
                <h5 class="Total" >Total : <span id="TL" style="color:#ff4838 ;"><?php echo $place[0][2]; ?> $</span></h5>
            </div>
            <input id="btn-clr" type="submit" value="Emphasis" class="btn   d-block book disabled" name="sub">
        </form>
    </div>
    <?php
    }
    else
    {
        header("Location: ./login.php");
    }   
    include "footer.php" ;
     ?>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.min.js" integrity="sha512-F3F53+tMh/CBxMQ60GN5R4EiFW7PcuND+9IDC3Qpkwc7SfxgzHigRdUO3+2+mNal2ot3Wp6KR0zx8r8BbsW+Bg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="javascript/BOOK1.js"></script>
     <script src="javascript/jquery-3.6.0.min.js"></script>
     <script src="javascript/bootstrap.bundle.js"></script>
    
    <script src="javascript/Book.js"></script>


 <?php  
if(isset($_GET['Errors']))
{
    if($_GET['Errors'] == 0)
    { ?>

    <script> 
    Swal.fire(
        {
            title:'You are registered at this location',
            icon: 'success',
            html: `<h6>Go to your <a href="./Myreservations.php" > reservations </a> </h6>`,
        }
    
     );
    </script>
    <?php
    }
    else
    {?>
     <script> 
    Swal.fire(
        {
            title:'There was a problem during the registration process, try again',
            icon: 'error',
        }
     );
    </script>
    <?php
    }
    }?>

</body>
</html>