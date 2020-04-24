<?php
   include ('handShake.php');
   $aT = $_POST['articleTitle'];
   $ac = $_POST['articleContent'];
   $id = $_POST['id'];
   if (isset($ac)) {
     $query = mysqli_query($con,"UPDATE articles SET articleTitle = '$aT', articleContent = '$ac', dateEdite = now() WHERE id ='$id'");
     if ($query) {
     	echo "success";
     }else{
     	echo "error";
     }
   }else{
     	echo "noContent";
   }
 ?>
