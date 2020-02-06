<?php
//    $conn = mysqli_connect('localhost','root','','medical_hms');
//
//    if(mysqli_connect_errno()) {
//        echo "Failed to Connect to MYSQL";
//    }else {
////        echo "Connected With Success";
//    }

    $pdo = new PDO('mysql:host=localhost;dbname=medical_hms;charset=utf8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if($pdo){
        echo "<br><br><br><br> Connection Success";
    }

?>