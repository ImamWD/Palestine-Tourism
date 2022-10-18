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
    <link rel="stylesheet" href="style/login.css">

</head>
<body>
<?php include "navbar.php" ?>
<div class="login-background">
   <div class="login-content">
    <h1 class="login-header">Login</h1>
    <?php
      
      if(isset($_SESSION['successsignup']))
      {
        echo "<h5 class='p-3 mb-2 bg-success text-white' style='color:white; width:100%; text-align: center !important;'>"; echo $_SESSION['successsignup']; echo "</h5>";
        unset($_SESSION['successsignup']);
      }
      ?>
       <?php
      
      if(isset($_SESSION['loginerror']))
      {
        echo "<h5 class='p-3 mb-2 bg-danger text-white' style='color:white; width:100%; text-align: center !important;'>"; echo $_SESSION['loginerror']; echo "</h5>";
        unset($_SESSION['loginerror']);
      }
      ?>
    <form action="./backendfiles/handlelogin.php" method="POST">
        <label class="login-label">Email</label>
        <input onkeyup="email_validation(this)" class="input-group-text form-control login-input" type="email" name="useremail" placeholder="Your Email"/>
        <p id="email-error"></p>
        <label  class="login-label">Password</label>
        <input onkeyup="password_validation(this)" class="input-group-text form-control login-input" type="password" name="userpassword"  placeholder="Your Password" />
        <p id="pass-error"></p>
        <label>remember me</label>
        <input type="checkbox" name="remember"  />
        <input id="js-btn" class="btn btn-primary login-btn disabled" type="submit" name="send" value="Login" />
    </form>
    <p>If you are a new user, you can <a href="./signup.php" class="go-signup">Sign up?</a></p>
   </div>
</div>


<?php include "footer.php" ?>
<script src="javascript/jquery-3.6.0.min.js"></script>
<script src="javascript/bootstrap.bundle.js"></script>
<script src="javascript/login.js"></script>
</body>
</html>