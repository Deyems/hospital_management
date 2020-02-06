<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login | Doctor</title>
        <link rel="stylesheet" href="../../resources/bootstrap.min.css">
        <script src="../../resources/jquery-3.3.1.slim.min.js"></script>
        <script src="../../resources/popper.min.js"></script>
        <script src="../../resources/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark text-success">
                <a class="navbar-brand" href="#">
<!--                  <img class="" width="60" src="images/">-->
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
                            <a href="../register/doc_reg.html.php" class="nav-link">New Doctor?</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a href="doc_login.php" class="nav-link">Registered Doctor</a>
                        </li>
                    </ul>
                </div>
            </nav>
            
        </div> <!--End of FIRSTS Container-->
            <div class="container-fluid mt-4">
            <div class="row my-3">
                <div class="col-sm col-md-3"></div>
                <div class="col-sm col-md-6 p-4 shadow">
                    <form action="#" class="">

                        <div class="form-group">
                            <div class="alert alert-success">
                                <span>Logging in.........</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="card">
                                <div class="card-footer">Login here</div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label class="form-label mr-2">Email:</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label mr-2">Password:</label>
                            <input type="password" name="pwd" class="form-control">
                        </div>

                        <div class="form-group d-flex justify-content-between">
                            <div class="">
                                <button type="submit" class="btn btn-dark">Login &raquo;</button>
                            </div>
                            <div>
                                <a href="../register/doc_reg.html.php" class="btn btn-dark">Register here</a>
                            </div>
                        </div>
                        
                        <div class="form-group d-flex justify-content-between">
                            <div>
                                <a href="#" class="">Forgot Password</a>
                            </div>
                            <div>Are you New Here?</div>
                        </div>

                    </form>
                </div>
                <div class="col-sm col-md-3"></div>
            </div>
        </div> <!--END OF CONTAINER-FLUID-->
    </body>
</html>