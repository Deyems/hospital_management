<?php
include __DIR__.'/../../controllers/conn/conn.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <?php include __DIR__. '/linkedfiles/linker.html.php'; ?>
    </head>
    <body>
        <?php include __DIR__. '/navbar/navbar.html.php'; ?>
        <br><br>
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
                        <label class="form-label mr-2">Card Number:</label>
                        <input type="text" name="cardNumber" class="form-control">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="form-label mr-2">Password:</label>
                        <input type="password" name="pwd" class="form-control">
                    </div>
                    
                    <div class="form-group d-flex justify-content-between">
                        <div class="">
                            <button type="submit" class="btn btn-dark">Login</button>
                        </div>
                        <div>
                            <a href="#" class="">Forgot Password</a>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-sm col-md-3"></div>
        </div>
    </div> <!--END OF CONTAINER-FLUID-->
    </body>
</html>