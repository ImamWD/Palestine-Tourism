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
    <link rel="stylesheet" href="style/Book.css">
</head>
<body>
    <?php include "navbar.php"?>

    <header class="BOOK-header">
        <div class="left-header">
            <img src="./images/home-images/p-alpha4.png" class="Place-image"/>
           
        </div>
        <div class="right-header container">
            <div class="Name-Location"> 
                <h1 class="Place-name">Sama Nablus</h1>
                <h1 class="location">Nablus</h1>
            </div>
            <p class="Description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi autem inventore dolor pariatur? Saepe, corrupti repudiandae aliquam minus consectetur ipsa ratione earum architecto, iste esse tenetur ab aperiam quibusdam recusandae vitae veritatis? Delectus, vero. Minus adipisci veritatis illo exercitationem porro, nobis libero accusamus eos ipsum qui ex laboriosam dolore ab, nulla, dolorum vel at? Veritatis molestias facere, exercitationem placeat tempore provident quisquam veniam. Quidem maxime aperiam vitae dolores voluptatibus non!</p>
            <h4 class="price"><span style="color:#ff4838 ;">200.00 $ </span> Pre Person</h4>
            <h5 class="Time">Form <span style="color:#ff4838 ;" class="Start-Time">8:00 AM</span> to <span style="color:#ff4838 ;" class="End-Time">22:00 PM</span></h5>
        </div>
    </header>
    <div class="Recervation">
        <button class="btn show1" >Book now</button>
        <form method="POST" class="w-100 form-reserve">
            <div class="DIVV">
                <label> Journey start </label>
                <input class="form-control" type="time" name="Start">
                <label> Journey End</label>
                <input class="form-control" type="time" name="End">
            </div>
            <div class="DIVV">
                <label>Number Of Person</label>
                <input class="form-control" type="number" name="PerNum"/>
            </div>
            <div class=" DIVV">
                <label>Journey Date</label>
                <input class="form-control" type="date" name="Date"/>
               <h5 class="Total">Total : <span style="color:#ff4838 ;">500 $</span></h5>
            </div>
            <input type="submit" value="Emphasis" class="btn  d-block book" name="sub">
        </form>
    </div>
    <?php include "footer.php" ?>
    <script src="javascript/jquery-3.6.0.min.js"></script>
    <script src="javascript/bootstrap.bundle.js"></script>
    <script src="javascript/Book.js"></script>
</body>
</html>