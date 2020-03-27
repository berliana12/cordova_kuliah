<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $title=$_POST['title'];
 $singer=$_POST['singer'];
 $country=$_POST['country'];
 $q=mysqli_query($con,"INSERT INTO `list_song` (`title`,`singer`,`country`) VALUES ('$title','$singer','$country')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>