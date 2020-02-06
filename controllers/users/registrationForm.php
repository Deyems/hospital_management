<?php
include __DIR__.'/../conn/conn.php';?>

<?php
    function test_input($data){
        $data = trim($data);
        $data = strip_tags($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST["register"])){
        $fullname = test_input($_POST['fullname']);
        $cardNo = test_input($_POST['cardNumber']);
        $email = test_input($_POST['email']);
        $password = test_input($_POST['pwd']);
        $c_password = test_input($_POST['c_pwd']);
        $gender = test_input($_POST['gender']);
        $dob = test_input($_POST['dob']);
        
        $sql = "INSERT INTO `user` (id,fullname,cardNumber,email,passkey,c_pass,sex,dob,status)
                VALUES(null,'$fullname','$cardNo','$email','$password','$c_password','$gender','$dob','new')";
        if(!$sql) {
            echo  mysqli_error()."<div class='form-group'>
                        <div class='alert alert-warning'>
                            <span> 'Error in the code' </span>
                        </div>
                    </div>";
        }else {
            $query = mysqli_query($conn,$sql);
            if(!$query){
                echo  mysqli_error($conn)."<div class='form-group'>
                        <div class='alert alert-warning'>
                            <span> 'Error in the code' </span>
                        </div>
                    </div>";
            }else{
                redirect('register.php');
                echo "<div class='alert alert-success'>
                        <span> 'Registration Successful' </span>
                      </div>
                    </div>";
            }
        }
        
    } //Overall if
?>