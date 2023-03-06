<?php
include 'connection.php';

    //if upload form is submitted

    if (isset($_POST['submit'])) {

        $iteamName = $_POST['iteamname'];
        $noOfItems = $_POST['noofproduct'];
        $discription = $_POST['discription'];
        $pdf = $_FILES['resume1']['name'];
        $pdf_type = $_FILES['resume1']['type'];
        $pdf_size = $_FILES['resume1']['size'];
        $pdf_temp_loc = $_FILES['resume1']['tmp_name'];
        $pdf_store = "resume1/".$pdf;

        move_uploaded_file($pdf_temp_loc, $pdf_store);

        $sql = "INSERT INTO tb_reprts(reName , reDiscription, rfile) values('$iteamName','$discription','$pdf')";
        $query = mysqli_query($connection, $sql);

    }
?>