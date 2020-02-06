
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <?php include __DIR__. '/linkedfiles/linker.html.php'; ?>
</head>

<body>
    <?php include __DIR__. '/navbar/navbar.html.php'; ?>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm col-md-3 my-3"></div>
                <div class="col-sm col-md-6 shadow-sm p-4 my-3">
                    <form method="post" action="../../controllers/users/registrationForm.php" class="">

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
                            <label class="form-label mr-2">Card Number:</label>
                            <input type="text" name="cardNumber" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label mr-2">Email:</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label mr-2">Password:</label>
                            <input type="password" name="pwd" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label mr-2">Confirm Password:</label>
                            <input type="password" name="c_pwd" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label mr-3">Sex:</label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="male" id="male" name="gender" class="custom-control-input">
                                <label class="custom-control-label" for="male">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="female" id="female" name="gender" class="custom-control-input">
                                <label class="custom-control-label" for="female">Female</label>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">D-O-B:</span>
                                </div>
                                <input type="date" name="dob" class="form-control">
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-between">
                            <div class="">
                                <button id="register" name="register" type="submit" class="btn btn-secondary">Register</button>
                            </div>
                            <div>
                                <button id="cardGenerator" type="button" class="btn btn-info">Generate Card Number</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="card">
                                <div class="card-header">xxxXXXXxx</div>
                            </div>
                        </div>

                        <?php
                            echo stripslashes("Who\'s Peter Griffin?");
                        ?>

                    </form>
                </div>
            <div class="col-sm col-md-3 my-3"></div>
        </div>
    </div>
</body>
</html>