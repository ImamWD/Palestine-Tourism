<?php  
session_start();
if(isset($_SESSION['admin']) || isset($_SESSION['customer']))
{
  header("Location: ./index.php");
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
    <link rel="stylesheet" href="style/signup.css">

</head>
<body>
<?php include "navbar.php" ?>
<div class="signup-background">
   <div class="signup-content">
    <h1 class="signup-header">Sign Up</h1>
    <?php
      
      if(isset($_SESSION['Error']))
      {
        echo "<h5 class='p-3 mb-2 bg-danger text-white' style='color:white; width:100%; text-align: center !important;'>"; echo $_SESSION['Error']; echo "</h5>";
        unset($_SESSION['Error']);
      }
      ?>
    <form action="./backendfiles/handlesignup.php" >
        <label class="signup-label">Full Name</label>
        <input onkeyup="Name_validation(this)" class="input-group-text form-control signup-input" type="text" name="username" placeholder="Your Name"/>
        <p id="name-error"></p>

        <label class="signup-label">Email</label>
        <input onkeyup="email_validation(this)" class="input-group-text form-control signup-input" type="email" name="useremail" placeholder="Your Email"/>
        <p id="email-error"></p>
        
        <label  class="signup-label">Password</label>
        <input onkeyup="password_validation(this)" class="input-group-text form-control signup-input" type="password" name="userpassword"  placeholder="Your Password" />
        <p id="pass-error"></p>

        <label class="signup-label">Live In</label>
        <select class="form-select" aria-label="Default select example" name="userlocation">
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
        <input id="js-btn" class="btn btn-primary signup-btn disabled" type="submit" name="send" value="Sign up" />
      
    </form>
    <p>If you have created an account <a href="./login.php" class="go-signup">Login?</a></p>
   </div>
</div>


<?php include "footer.php" ?>
<script src="javascript/jquery-3.6.0.min.js"></script>
<script src="javascript/bootstrap.bundle.js"></script>
<script src="javascript/signup.js"></script>
</body>
</html>