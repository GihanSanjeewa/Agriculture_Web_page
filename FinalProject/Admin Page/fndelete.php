<?php   
 include 'connection.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `iteam_details` WHERE id = '$id'";  
      $run = mysqli_query($connection,$query);  
      if ($run) {  
           header('location:delete.php');  
      }else{  
           echo "Error: ".mysqli_error($connection);  
      }  
 }  
 ?> 