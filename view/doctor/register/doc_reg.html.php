<?php
include __DIR__.'/../../conn/conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration | Doctor</title>
    <link rel="stylesheet" href="../../resources/bootstrap.min.css">
    <script src="../../resources/jquery-3.3.1.slim.min.js"></script>
    <script src="../../resources/popper.min.js"></script>
    <script src="../../resources/bootstrap.min.js"></script>
</head>
    <style>
/*
        body{
            margin: 0;
            padding: 0;
        }
*/
    </style>
<body>
    <div class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark text-success">
            <a class="navbar-brand" href="#">
<!--                    <img class="" width="60" src="images/">-->
                Image here
            </a>

            <button type="button" class="navbar-toggler" data-target="#collapsibleNav" data-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="collapsibleNav" class="collapse d-lg-flex justify-content-end navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item mr-3">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a href="doc_reg.html.php" class="nav-link">New Doctor?</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a href="../login/doc_login.php" class="nav-link">Registered Doctor</a>
                    </li>
                </ul>
            </div>

        </nav>
    </div> <!--End of FIRSTS Container-->
    
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm col-md-3 my-3"></div>
            <div class="col-sm col-md-6 shadow p-4 my-3">
                <form method="post" action="doc_reg.php" class="">
                    
                    <div class="form-group">
                        <div class="alert alert-success">
                            <span><?php echo "Registration Successful!" ?></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="card">
                            <div class="card-footer">Register here</div>
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="form-label mr-2">Full Name:</label>
                        <input type="text" name="fullname" class="form-control">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="form-label mr-2">Email:</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="form-label mr-2">Mobile Number:</label>
                        <input type="text" name="mobile_no" class="form-control">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="form-label mr-2">Password:</label>
                        <input type="password" name="pwd" class="form-control">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="form-label mr-2">Confirm Password:</label>
                        <input type="password" name="c_pwd" class="form-control">
                    </div>
                    
                    <div class="form-group d-flex justify-content-between">
                        <div class="">
                            <button id="register" name="register" type="submit" class="btn btn-secondary">Register &raquo;</button>
                        </div>
                        <div class="">
                            <a href="../login/doc_login.php" class="btn btn-secondary">Login here</a>
                        </div>
                    </div>
                    
                    <div class="form-group d-flex justify-content-between">
                        <div></div>
                        <div>Already a Member?</div>
                    </div>
                    
                </form>
            </div>
            <div class="col-sm col-md-3 my-3"></div>
        </div>
    </div>
</body>
</html>