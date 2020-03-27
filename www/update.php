<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $title=$_POST['title'];
 $singer=$_POST['singer'];
 $country=$_POST['country'];
 $q=mysqli_query($con,"UPDATE `list_song` SET `title`='$title',`singer`='$singer',`country`='$country' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>