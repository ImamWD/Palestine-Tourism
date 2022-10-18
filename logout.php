<?php
session_start();
if(isset($_SESSION['customer']) || isset($_SESSION['admin']))
{
    unset($_SESSION['customer']);
    unset($_SESSION['admin']);
}
header("Location: ./login.php");
?>