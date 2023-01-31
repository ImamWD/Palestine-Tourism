<?php 
if(isset($_GET['pid'])) // if open file with GET mathod for to choose place type 
{
    $flag = $_GET['pid'];
   
    //check inputs
    if(isset($_POST['name'])) // if open this file with form
    {
        // check all values is not empty
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
            if(isset($_POST['explore']))// choose is explore or not
            $explore = 1 ;
            else
            $explore = 0 ;
            $PlaceType;
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
            if($h2 < $h1)
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
            if($iserr)// validation time error
            {
                $time_error = "The final time is less than the starting time, please check it";
                Errorfunction($flag,$time_error);
            }
            else // after to pass validation errors you can update data 
            {
                if(isset($_FILES['my_image'])) // if user needed to update image   
                {
                    // Image options
                    $img_name = $_FILES['my_image']['name'];
                    $img_size = $_FILES['my_image']['size'];
                    $tmp_name = $_FILES['my_image']['tmp_name'];
                    $error = $_FILES['my_image']['error'];
                    if ($error == 0) 
                    {
                        if ($img_size > 5000000) // max size is 5 MB
                        {
                            $em = "Sorry, your file is too large.";
                            Errorfunction($flag,$em);
                        }
                        else // less than max size ... complete
                        {
                            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                            $img_ex_lc = strtolower($img_ex);
                            $allowed_exs = array("jpg", "jpeg", "png"); 
                            if (in_array($img_ex_lc, $allowed_exs)) // check type of file 
                            {
                                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                                $img_upload_path = 'Placeuploads/'.$new_img_name;
                                move_uploaded_file($tmp_name, $img_upload_path);
                                //time
                                $starttime = $h1 . ":" . $m1 .":00";
                                $endtime = $h2 . ":" . $m2 .":00";
                                // Insert into Database
                                //include connection page
                                $id = $_GET['id'];
                                echo $id;
                                include "conniction.php";
                                //delete old image
                                $oldimage = "SELECT imageurl FROM places where `id` =" . $id. ";";
                                $result = mysqli_query($conn ,  $oldimage);
                                $imgpath = mysqli_fetch_assoc($result);
                                unlink("./Placeuploads/" . $imgpath['imageurl']);
                                $update_query ="UPDATE `places`
                                SET
                                `name`='$placename',
                                `cost`='$placecost',
                                `location`='$placecity',
                                `starttime`='$starttime',
                                `closetime`='$endtime',
                                `descreption`='$placedesc',
                                `imageurl`='$new_img_name',
                                `explore`=$explore
                                WHERE `id`=$id;";
                                mysqli_query($conn , $update_query);
                                $Donemsg = "$placename place has been added successfully";
                                Donefunnction($flag,$Donemsg);
                            }
                            else // this type is not avilable
                            {
                                $em = "You can't upload files of this type";
                                $em = "unknown error occurred!";
                                Errorfunction($flag,$em);
                            }
                        }
                    }
                    else // error for to upload image
                    {
                        //time
                     $starttime = $h1 . ":" . $m1 .":00";
                     $endtime = $h2 . ":" . $m2 .":00";
                     // Insert into Database
                     //include connection page
                     $id = $_GET['id'];
                     include "conniction.php";
                     $update_query ="UPDATE `places`
                     SET
                     `name`='$placename',
                     `cost`='$placecost',
                     `location`='$placecity',
                     `starttime`='$starttime',
                     `closetime`='$endtime',
                     `descreption`='$placedesc',
                     `explore`=$explore
                     WHERE `id`=$id;";
                     mysqli_query($conn , $update_query);
                     $Donemsg = "$placename place has been added successfully";
                     Donefunnction($flag,$Donemsg);
                    }       
                }
                else //update all whithout image
                {
                    $em = "unknown error occurred!";
                    Errorfunction($flag,$em);
                }
            }     
        } 
        else //any one input is empty
        {
            $empty_error = "This information is incomplete, please check it";
            Errorfunction($flag,$empty_error);
        }
    }
    else // if open file without form
    {
        header("location: ../dashboards.php");
    }
}
else // no place type pid
{
    header("location: ../dashboards.php");
}
function Errorfunction($flag,$Error) // function to go back error
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
function Donefunnction($flag,$Donemsg) // function if well done update
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
