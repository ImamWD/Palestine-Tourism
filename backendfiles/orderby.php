<?php
            
            $query = "SELECT * from places where type = '" . $PlaceType . "' ORDER BY -explore";
            $result = mysqli_query($conn,$query);
            $Arr = mysqli_fetch_all($result);
            $co=0;                       
?>