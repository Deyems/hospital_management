<?php
//session_start();

include_once('../conn/conn.php');
?>

<?php
    function test_input($data){
        $data = trim($data);
        $data = strip_tags($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST["sub-report"])){
        $fullname = test_input($_POST['fullname']);
        $cardNo = test_input($_POST['cardNo']);
        $complaint = test_input($_POST['complaint']);
        $diagnosis = test_input($_POST['diagnosis']);
        
        $lab = test_input($_POST['lab']);
        $drug = test_input($_POST['drug']);
        
        $doa = test_input($_POST['doa']);
        $toa = test_input($_POST['toa']);
//        $date = new Date();
        
        echo $fullname; echo "<br>";
        echo $cardNo; echo "<br>";
        echo $complaint; echo "<br>";
        echo $diagnosis; echo "<br>";
        echo $lab; echo "<br>";
        echo $drug; echo "<br>";
        echo $doa; echo "<br>";
        echo $toa; echo "<br>";
//        echo $date;
        
//        $fullname = test_input($_POST['fullname']);
        
        
        $sql = "INSERT INTO `doc_report` (id,patient_name,user_id,doctor_id,lab_investigation,drugs_told,doa,toa,card_no,complaint,diagnosis,date_created)
                VALUES(null,'$fullname','3','2','$lab','$drug','$doa','$toa','$cardNo','$complaint','$diagnosis','')";
        if(!$sql) {
            echo mysqli_error($conn);
        }else {
            $query = mysqli_query($conn,$sql);
            if(!$query){
                echo mysqli_error($conn);
            }else{
                echo "Success in Update";
            }
        }
        
        
        
    }
?>