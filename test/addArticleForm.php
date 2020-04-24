<?php
   include ('handShake.php');
   $aT = $_POST['articleTitle'];
   $ac = $_POST['articleContent'];
   if (isset($ac)) {
     $query = mysqli_query($con,"INSERT INTO articles(id,articleTitle,articleContent,datePublish,dateEdite) VALUES(null,'$aT','$ac',now(),now())");
     if ($query) {
     	echo "success";
     }else{
     	echo "error";
     }
   }else{
     	echo "noContent";
   }
 ?>
