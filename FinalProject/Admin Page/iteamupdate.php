<?php
    require_once 'connection.php';

    if(isset($_POST['submit'])){
        $status = $statusMsg = '';

        if(isset($_POST['update'])){
            
            $iteamName = $_POST['iteamname'];
            $noOfItems = $_POST['noofproduct'];
            $discription = $_POST['discription'];
            $id = $_POST['id'];
            
            $status = 'error';
            if(!empty($_FILES["itemimage"]["name"])){
                //get file info 
                $fileName = basename($_FILES["itemimage"]["name"]);
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    
                //allow certain file format
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                if(in_array($fileType,$allowTypes)){
                    $image = $_FILES['itemimage']['tmp_name'];
                    $imgcontent = addslashes(file_get_contents($image));
    
                    //insert image contenct into database
                    $sql = "update iteam_details set iteam_name = '$iteamName' no_of_iteams = '$noOfItems' discription = '$discription' photo = '$itemimage' where id = '$id'";
                    $insert = $connection -> prepare($sql);
                    $insert->execute([$id]);
    
                    if($insert){
                        $status = 'success';
                        $statusMsg = "File Uplod successfully.";
                    }else{
                        $statusMsg = "File Uplod Faild, please try again.";
                    }
                }
            }
        }
    }
    
?>