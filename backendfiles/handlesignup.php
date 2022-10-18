<?php
if(isset($_GET['username']))
{
    session_start();
    
    $username = $_GET['username'];
    $useremail = $_GET['useremail'];
    $userpassword = $_GET['userpassword'];
    $userlocation = $_GET['userlocation'];
    // php Validation
    if($username == "")
    {
        $_SESSION['Error']  = "Pleace enter your name";
        header("Location:../signup.php");
    }
    elseif($useremail == "")
    {
        $_SESSION['Error']  = "Pleace enter your Email";
        header("Location:../signup.php");
    }
    elseif($userpassword == "")
    {
        $_SESSION['Error']  = "Pleace enter your password";
        header("Location:../signup.php");
    }
    else
    {    
    include "conniction.php";
    // DB check email is valid query
    $query = "SELECT * from customers where email='" . $useremail ."'";
    // request SQL query
    $result = mysqli_query($conn,$query);
       if($result->num_rows == 0) // if a new email user 
       {
        $query = "SELECT * from admins where email='" . $useremail ."'"; 
        $result = mysqli_query($conn,$query);
        if($result->num_rows == 0) // if a new email user 
        {
             //insert data
         $query = "INSERT INTO `customers` (`id`, `name`, `email`, `password`, `location`) VALUES (NULL,'".$username."', '".$useremail."', '".$userpassword."', '".$userlocation."');";
         //request query
         mysqli_query($conn,$query);
         //open login page
         $_SESSION['successsignup'] = "welcome " . $username . " your account has been created, log in now";
         header("Location:../login.php");
        }     
        else
        {
            $row = $result->fetch_assoc();
            $_SESSION['Error']  = "hello " . $row['name'] . " This account already exists";
            header("Location:../signup.php");
        }   
        }
       else // already enmail accaunted
       {
        $row = $result->fetch_assoc();
        $_SESSION['Error']  = "hello " . $row['name'] . " This account already exists";
        header("Location:../signup.php");
       }
    }
}
else
{
    header("Location:../signup.php");
}
?>