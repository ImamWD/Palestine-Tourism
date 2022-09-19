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
    <form >
        <label class="signup-label">Full Name</label>
        <input onkeyup="Name_validation(this)" class="input-group-text form-control signup-input" type="email" name="useremail" placeholder="Your Name"/>
        <p id="name-error"></p>

        <label class="signup-label">Email</label>
        <input onkeyup="email_validation(this)" class="input-group-text form-control signup-input" type="email" name="useremail" placeholder="Your Email"/>
        <p id="email-error"></p>
        
        <label  class="signup-label">Password</label>
        <input onkeyup="password_validation(this)" class="input-group-text form-control signup-input" type="password" name="userpassword"  placeholder="Your Password" />
        <p id="pass-error"></p>

        <label class="signup-label">Live In</label>
        <select class="form-select" aria-label="Default select example">
            <option selected value="1">Jerusalem</option>
            <option value="2">Nablus</option>
            <option value="3">Jenin</option>
            <option value="4">Tulkarm</option>
            <option value="5">Hebron</option>
            <option value="6">Bethlehem</option>
            <option value="7">Ramallah</option>
            <option value="8">Jericho</option>
            <option value="9">Qalqilya</option>
            <option value="10">Salfit</option> 
            <option value="9">Tubas</option>
          </select>

        Female <input type="radio" name="useremail" />
        Male <input type="radio" name="useremail" />

        
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