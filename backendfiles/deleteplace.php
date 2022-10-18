<?php
if(isset($_GET['id']) && isset($_GET['pid']))
{
  include "conniction.php";

  $usquery = "DELETE FROM customersplaces WHERE place_id=". $_GET['id'] .";";
  $blogquery = "DELETE FROM blogs WHERE place_id=". $_GET['id'] .";";
  $plquery = "DELETE FROM places WHERE id=". $_GET['id'] . ";";
  mysqli_query($conn,$usquery);//delete all reservations for this place
  mysqli_query($conn,$blogquery);//delete all blogs for this place
  
  //delete old image
  $oldimage = "SELECT imageurl FROM places where `id` =" .$_GET['id']. ";";
  $result = mysqli_query($conn ,  $oldimage);
  $imgpath = mysqli_fetch_assoc($result);
  unlink("./Placeuploads/" . $imgpath['imageurl']);

  mysqli_query($conn,$plquery);//delete this place
  //return
  $flag = $_GET['pid'];
  $done = "Item and reservations for this item have been deleted successfully";
  if($flag == 0)
  {
    header("location:../ReligiousDashboard.php?done=$done");
  }
  elseif($flag == 1)
  {
    header("location:../CulturalDashboard.php?done=$done");
  }
  elseif($flag == 2)
  {
    header("location:../LeisureDashboard.php?done=$done");
  }
  elseif($flag == 3)
  {
    header("location:../MedicalDashboard.php?done=$done");
  }
  else
  {
    header("location:../dashboards.php");
  }
 
} 
else
{
    header("location:../dashboards.php");
}
?>
