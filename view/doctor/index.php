<?php
include __DIR__.'/../../controllers/conn/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome | Doctor</title>
    <?php include __DIR__. '/linkedfiles/linker.html.php'; ?>
</head>
    <body>
        <?php include __DIR__. '/navbar/navbar.html.php';?>
        
        <div class="container-fluid mt-2">
            <br><br>
            <div class="" >
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#profile" class="nav-link" data-toggle="tab">Profile Update</a>
                    </li>
                    <li class="nav-item">
                        <a href="#appointment" class="nav-link" data-toggle="tab">View Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a href="#records" class="nav-link" data-toggle="tab">Patients</a>
                    </li>
                    <li class="nav-item">
                        <a href="#report" class="nav-link" data-toggle="tab">Update Report</a>
                    </li>
                    <li class="nav-item">
                        <a href="#schedule" class="nav-link" data-toggle="tab">New Schedule</a>
                    </li>
                </ul>
            </div>
            
            <div class="tab-content p-2 shadow-sm">
                <div id="profile" class="col-md-8 col-lg-6 border mt-3 tab-pane active">
                    <h3 class="mt-2">Update your Details</h3>
                    <form action="#" class="py-3">
                        
                        <div class="form-group">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" value="doctors name" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name" class="form-label">Email:</label>
                            <input type="email" disabled value="email add" id="email" name="email" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="form-label">Password:</label>
                            <div class="input-group">
                                <input type="password" value="doctors name" id="pwd" name="pwd" class="form-control">
                                <div class="input-group-prepend">
<!--                                    <span class="">-->
                                        <button type="button" class="input-group-text btn btn-dark">Unhide</button>
<!--                                    </span>-->
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="form-label">Mobile No:</label>
                            <input type="text" value="+2348000004500" id="mobile" name="mobile" class="form-control">
                        </div>
                        
                        <div class="d-sm-flex justify-content-between">
                            <div></div>
                            <button type="submit" class="btn btn-info">Update
                                <span> &raquo; </span>
                            </button>
                        </div>
                    </form>
                </div>
                
                <div id="appointment" class="tab-pane container fade py-4">
                    <h3 class="text-center mt-2">Appointments History</h3>
<!--                    <p>Fetch tables from database of registered people</p>-->
                    <div class="row p-3 border">
                        
                        
                        
                        <?php 
                            $sql = 'SELECT `doc_report`.`id`, `doa`,`toa`, `fullname`, `mobile_no`, `card_no` 
                            FROM `doc_report` INNER JOIN `doctors`
                            ON `doc_report`.`doctor_id` = `doctors`.`id`
                            WHERE `doctor_id` = "2"
                            ORDER BY `doa`;
                            ';
                            $stmt = $pdo->query($sql);
                        ?>
                        
                        <?php foreach($stmt as $row): ?>
                        
                            <div class="col-sm col-md-4">
                            <div class="card my-4" id="cardparent">
                                <div class="card-header d-flex justify-content-between">
                                    <p class="card-text">Patient's Name:
                                        <span class="lead"><i> <?//$row["patient_name"]?> </i></span>
                                    </p>
                                    <a href="#" class="mx-3 btn btn-light">&times;</a>

                                </div>
                                <div class="card-body">
                                    <div>
                                        <p class="card-text">Date:
                                            <span class="lead"><i><?=$row['doa'] ?></i></span>
                                        </p>

                                    </div>
                                    <div>
                                        <p class="card-text">Time:
                                            <span class="lead"><i><?=$row['toa'] ?></i></span>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="card-text">Card Number:
                                            <span class="lead"><i><?=$row['card_no'] ?></i></span>
                                        </p>
                                    </div>
                                </div>
                            
                                <div class="card-footer">
                                    <p class="card-text">Contact:
                                        <span class="text-info"><i>08028839930</i></span>
                                    </p>
                                </div>
                            
                            </div> <!--END OF CARD1-->
                        </div>
                        
                        <?php endforeach; ?>
                        
                        <?php 
//                            $sql = 'SELECT `doc_report`.`id`, `doa`,`toa`, `fullname`, `mobile_no`, `patient_name`, `card_no` 
//                            FROM `doc_report` INNER JOIN `doctors`
//                            ON `doc_report`.`doctor_id` = `doctors`.`id`
//                            WHERE `doctors`.`fullname` = "Damina Abel"
//                            ORDER BY `doa`;
//                            ';
//                            $result = mysqli_query($conn,$sql);
                            
                        
//                            foreach (mysqli_fetch_all($result) as $row){
////                                echo $row['patient_name'];
//                                var_dump($row); echo "<br>";
//                            }
                            
                            //BUILDING BLOCK FOR THE CODE
                            /*
                            foreach ($stmt as $row){
                                echo $row['doa']. "<br>";
//                                var_dump($row); echo "<br>";
                            }
                            */
                        
//                            while($row = $stmt->fetch()) {
//                                echo $row["doa"]. "<br>";
//                            }
//                        var_dump($stmt);
                        ?>
                        
                    </div> <!--END OF CARD CONTAINER-->
                </div>
                
                <div id="records" class="tab-pane shadow-sm container fade">
                    
                    <div class="row">
                        <div class="seachQuery p-3">
                            <form action="#">
                                <div class="form-group form-inline">
                                    <input id="searchInput" name="searchInput" class="mr-sm-4 mb-2 form-control" placeholder="Search for Patients" type="search">
                                    <input id="subSearch" name="subSearch" class="ml-md-3 form-control btn btn-outline-success" value="Search" type="submit">
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    
                    
                    <table class="table table-hover table-responsive-lg">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Card Number</td>
                                <td>Mobile Number</td>
                                <td>Email</td>
                                <td>Sex</td>
                                <td>dob</td>
                                <td>Prescription</td>
                                <td>Re-schedule Appointment</td>
                            </tr>
                        </thead>
                        
                        
                        <tbody>
                            <?php
                                //WHERE QUERY PARAMETERS ARE
                                $sql_patient = 'SELECT `fullname`,`cardNumber`,`email`,`dob`,`sex`,`doc_report`.`patient_name`
                                FROM `user` INNER JOIN `doc_report`
                                ON `user`.`id` = `doc_report`.`user_id`
                                WHERE `doc_report`.`doctor_id` = "2"
                                ORDER BY `doa` DESC
                                ';
                                $patient = $pdo->query($sql_patient);
                                  
                            ?>
                            <?php foreach($patient as $cell): ?>
                                <tr>
                                    <td><?=$cell['fullname']?> </td>
                                    <td><?=$cell['cardNumber']?></td>
                                    <td><?//cell['']?>+234459090390</td>
                                    <td><?=$cell['email']?></td>
                                    <td><?=$cell['sex']?></td>
                                    <td><?=$cell['dob']?></td>
                                    <td class="text-center"><a class="px-2 btn btn-info" href="#">Edit</a></td>
                                    <td class="text-center"><a class="btn btn-success px-2" href="#">New</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        
                        <tfoot>
                            <tr class="text-center">
                                <td>&copy; 2019</td>    
                            </tr>
                        </tfoot>
                        
                    </table>
                </div>
                
                <div id="report" class="tab-pane container fade">
                    <div class="row">
                        <div class="col m-3">
                            <form id="reportForm" method="post" action="../action/report.php" class="">
                                <div class="form-group">
                                    <label for="fullname" class="form-label">Full Name:</label>
                                    <input id="fullname" name="fullname" class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="cardNo" class="form-label">Card Number:</label>
                                    <input id="cardNo" name="cardNo" class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="complain">Patients Complaint:</label>
                                    <textarea id="complain" name="complaint" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="diagnosis">Diagnosis:</label>
                                    <textarea id="diagnosis" name="diagnosis" rows="4" class="form-control"></textarea>
                                </div>
                                <div class="form-group my-4">
                                    <select id="prescription" name="prescription" class="custom-select mb-3">
                                        <option disabled selected>Prescription</option>
                                        <option value="lab">Laboratory Investigation</option>
                                        <option value="drug">Drugs Prescription</option>
                                    </select>
                                    <div id="lab" class="my-3 hide">
                                        <label for="labResearch">Type of Laboratory Investigation:</label>
                                        <input id="labResearch" name="lab" class="form-control" type="text">
                                    </div>
                                    <div id="drug" class="my-3 hide">
                                        <label for="drugsPrescribed">Drugs Prescribed:</label>
                                        <textarea id="drugsPrescribed" name="drug" rows="5" class="form-control"></textarea>
<!--                                        <input id="drugsPrescribed" name="drug" class="form-control" type="text">-->
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label" for="doa">Date of Next Appointment</label>
                                    <input id="doa" name="doa" class="form-control" type="date">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label" for="toa">Time of Appointment</label>
                                    <input id="toa" name="toa" class="form-control" type="time">
                                </div>
                                
                                <input value="Submit" name="sub-report" id="sub-report" class="btn btn-outline-info" type="submit">
                                
                            </form>
                        </div>
                    </div>
                </div>
                
                <div id="schedule" class="tab-pane container fade shadow-sm">
                    <div class="row">
                        
                    </div>
                </div>
                
            </div> <!--End of Tab Content-->
            
        </div>
        
    </body>
    <style>
        textarea{
            resize: none;
        }
        .hide{
            display: none;
        }
        .block{
            display: block;
        }
    </style>
</html>