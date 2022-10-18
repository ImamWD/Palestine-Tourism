<?php 
if(isset($_GET['pid']))
{
    $flag = $_GET['pid'];
   
    //check inputs
    if(isset($_POST['name']))
    {
         
         if(($_POST['name']) != "" && ($_POST['cost']) != "" && ($_POST['city']) != "" && ($_POST['desc']) != "" && ($_POST['h1']) != "" && ($_POST['m1']) != "" && ($_POST['h2']) != "" && ($_POST['m2'] != ""))
         {
            //initial for inputs
            $placename = $_POST['name'];
            $placecity = $_POST['city'];
            $placedesc = $_POST['desc'];
            $placecost = $_POST['cost'];
            $h1 = $_POST['h1'];
            $m1 = $_POST['m1'];
            $h2 = $_POST['h2'];
            $m2 = $_POST['m2'];
            if(isset($_POST['explore']))
            $explore = 1 ;
            else
            $explore = 0 ;

            $PlaceType;
            /*echo $placename . "<br>";
            echo $placecity . "<br>";
            echo $placedesc . "<br>";
            echo $h1 . "<br>";
            echo $m1 . "<br>";
            echo $h2 . "<br>";
            echo $m2 . "<br>";*/
            //check type of place
            if($flag == 0)//Religious
            {
                $PlaceType = "Religious";
            }
            elseif($flag == 1)//Cultural
            {
                $PlaceType = "Cultural";
            }
            elseif($flag == 2)//Leisure
            {
                $PlaceType = "Leisure";
            }
            elseif($flag == 3)//Medical
            {
                $PlaceType = "Medical";
            }
            else //pid is not avilable
            {
                header("location: ../dashboards.php");
            }

            //time validition
            $iserr =0;
            if($h2<$h1)
            {
                $iserr = 1;
            }
            elseif($h2 == $h1 && $m2 <= $m1)
            {
                $iserr = 1;
            }
            else
            {
                $iserr = 0;
            }
            // go back because find time error
            if($iserr)
            {
                $time_error = "The final time is less than the starting time, please check it";
                Errorfunction($flag,$time_error);
            }
            else
            {
            // Image options
            $img_name = $_FILES['my_image']['name'];
            $img_size = $_FILES['my_image']['size'];
            $tmp_name = $_FILES['my_image']['tmp_name'];
            $error = $_FILES['my_image']['error'];
            
            if ($error == 0) 
            {
                if ($img_size > 5000000)
                 {
                    $em = "Sorry, your file is too large.";
                    Errorfunction($flag,$em);
                }
                else 
                {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
                    $allowed_exs = array("jpg", "jpeg", "png"); 
                    if (in_array($img_ex_lc, $allowed_exs))
                     {
                        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                        $img_upload_path = 'Placeuploads/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);

                         // Insert into Database
                         //include connection page
                         include "conniction.php";
                         $Insert_query = "INSERT INTO `places` (`id`, `name`, `cost`, `location`, `starttime`, `closetime`, `descreption`, `imageurl`, `explore`, `Type`) VALUES (NULL, '" . $placename . "', '".$placecost."', '".$placecity. "', ' " . $h1 .":" .$m1 .":00', ' " . $h2 .":" .$m2 .":00', '".$placedesc."', '" .$new_img_name. "', '".$explore."', '".$PlaceType."');" ;
                         mysqli_query($conn , $Insert_query);
                         $Donemsg = "$placename place has been added successfully";
                         Donefunnction($flag,$Donemsg);
                    }
                    else
                    {
                        $em = "You can't upload files of this type";
                        $em = "unknown error occurred!";
                        Errorfunction($flag,$em);
                    }
                }
            }
            else 
            {
                $em = "unknown error occurred!";
                Errorfunction($flag,$em);
            }
        }   
    } 
    else //go back dash page and show message error
    {
            $empty_error = "This information is incomplete, please check it";
            Errorfunction($flag,$empty_error);
    }
    }
    else
    {
         header("location: ../dashboards.php");
    }
}
else
{
    header("location: ../dashboards.php");
}

function Errorfunction($flag,$Error)
{
    if($flag == 0) 
    {
        header("location: ../ReligiousDashboard.php?err=$Error");
    }
    elseif($flag == 1 )
    {
        header("location: ../CulturalDashboard.php?err=$Error");
    }
    elseif($flag == 2)
    {
        header("location: ../LeisureDashboard.php?err= $Error");
    }
    elseif($flag == 3)
    {
        header("location: ../MedicalDashboard.php?err=$Error");
    }
    else
    {
        header("location: ../dashboards.php");
    }        
}
function Donefunnction($flag,$Donemsg)
{
    if($flag == 0) 
    {
        header("location: ../ReligiousDashboard.php?done= $Donemsg");
    }
    elseif($flag == 1 )
    {
        header("location: ../CulturalDashboard.php?done= $Donemsg");
    }
    elseif($flag == 2)
    {
        header("location: ../LeisureDashboard.php?done= $Donemsg");
    }
    elseif($flag == 3)
    {
        header("location: ../MedicalDashboard.php?done= $Donemsg");
    }
    else
    {
        header("location: ../dashboards.php");
    }
}
?>
