<?php
    session_start();
    if (isset($_SESSION['verified_user_id'])) {
        $_SESSION ['status']= "u r logged in na";
        header ('Location: userindex.php');
        exit();
    }
    include ('includes/header.php'); 
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">

            <?php 
                if (isset($_SESSION['status'])) {
                    echo "<h5 class='alert alert-success'>" .$_SESSION['status']."</h5>";
                    unset($_SESSION['status']);
                }
            ?>               

                <div class="card">
                    <div class="card-header">
                        <h4>
                            Register
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="user_codee.php" method="POST">
                            
                            <div class="form-group mb 3">
                                <label for=""> Full Name </label>
                                <input type="text" name="full_name" class="form-control">
                            </div>
                            <div class="form-group mb 3">
                                <label for=""> Phone Number </label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="form-group mb 3">
                                <label for=""> Email Address </label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group mb 3">
                                <label for=""> Password </label>
                                <input type="phone" name="password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

