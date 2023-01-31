<?php
if(isset($_GET['placeId']) && isset($_GET['customerId']))//check true open
{
    //cusomer and place ids
    $CID = $_GET['customerId'];
    $PID = $_GET['placeId'];
    if(isset($_POST['Start']))
    {
        //define var's
        $Start = $_POST['Start'];
        $End = $_POST['End'];
        $NOP = $_POST['PerNum'];
        $Date = $_POST['Date'];
        //backend validation
        if($Start !="" && $End != "" && $NOP != "" && $Date !="")
        {
           
            {
                include "conniction.php";
                $query = "INSERT INTO `customersplaces` (`Customer_Id`, `Place_Id`, `NumOP`, `Starttime`, `Endtime`, `Cerated`, `visited`) VALUES ('".$CID."', '".$PID."', '".$NOP."', '".$Start.":00', '".$End.":00', '".$Date."' ,'1')";
                $Res= mysqli_query($conn , $query);
                if($Res)
                {
                    header("Location:../BookNow.php?placeId=".$PID."&Errors=0");
                }
                else
                {
                    header("Location:../BookNow.php?placeId=".$PID."&Errors=1");
                }
            }
           
        }
        else
        {
            header("Location:../BookNow.php?placeId=".$PID."&Errors=1");
        }
        
    }
}
else// fail open
{
    header("Location:../index.php");
}
?>
