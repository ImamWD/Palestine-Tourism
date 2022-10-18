<?php
if(isset($_POST['useremail'])) 
{
    session_start();
    if($_POST['useremail'] == "")
    {
        $_SESSION['loginerror'] = "Pleace enter your Email";
        header("Location:../login.php");
    }
    elseif($_POST['userpassword'] == "")
    {
        $_SESSION['loginerror'] = "Pleace enter your password";
        header("Location:../login.php");
    }
    else
    {
        $email = $_POST['useremail'];
        $password = $_POST['userpassword'];
        include "conniction.php";
        $EmailQuery = "SELECT * from customers where email='" . $email ."'";
        $PassQuery =  "SELECT * from customers where password='" . $password ."' and email= '".$email."'";
        $EmailAdmin = "SELECT * from admins where email='" . $email ."'";
        $PassAdmin =  "SELECT * from admins where apassword='" . $password ."' and email= '".$email."'";
        $result = mysqli_query($conn,$EmailQuery);
        $resultadmin = mysqli_query($conn,$EmailAdmin);
        if($result->num_rows >0)
        {
            $result = mysqli_query($conn,$PassQuery);
            if($result->num_rows >0)
            {
                $row = $result->fetch_assoc();
                $_SESSION['customer'] = $row['id'];
                header("Location:../index.php");
            }
            else
            {
                $_SESSION['loginerror'] = "The email or password is not available,Please try again";
                header("Location:../login.php");
            }
        }
        elseif($resultadmin->num_rows >0)
        {
            $resultadmin = mysqli_query($conn,$PassAdmin);
            if($resultadmin->num_rows >0)
            {
                $row = $resultadmin->fetch_assoc();
                $_SESSION['admin'] = $row['id'];
                header("Location:../dashboards.php");
            }
            else
            {
                $_SESSION['loginerror'] = "The email or password is not available,Please try again";
                header("Location:../login.php");
            }
        }
        else
        {
            $_SESSION['loginerror'] = "The email or password is not available,Please try again";
            header("Location:../login.php");
        }
    }
}
else
{
    header("Location:../login.php");
}
?>