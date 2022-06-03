<?php
    include ('authentication.php');
    include ('includes/header.php'); 
    include ('includes/navbar.php'); 
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4> My Profile</h4>
                    </div>
                     
                    <div class="card-body">
                        <?php

                            if (isset ($_SESSION['verified_user_id'])) {
                                $uid = $_SESSION['verified_user_id'];
                                $user = $auth->getUser($uid);
                                ?>
                        <form action="code.php" method="POST" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-8 border-end">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Display Name</label>
                                            <input type="text" name="display_name" value="<?=$user->displayName;?>" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Phone Number</label>
                                            <input type="text" name="phone" value="<?=$user->phoneNumber;?>" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Email Address</label>
                                            <div class="form-control">
                                            <?=$user->email;?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Role</label>
                                            <div class="form-control">
                                            <?php
                                    $claims = $auth->getUser($user->uid)->customClaims;
                                    if (isset($claims['admin']) == true) {
                                        echo "role: admin";
                                    }

                                    elseif (isset($claims['super_admin']) == true) {
                                        echo "role: sup admin";
                                    }

                                    elseif ($claims == null) {
                                        echo "role: x";
                                    }
                                 ?> 
                                        </div>
                                    </div>
                                    
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Account Status</label>
                                            <div class= "form-control">
                                            <?php 
                                                    if ($user->disabled) {
                                                        echo "Disabled";
                                                    }
                                                    else {
                                                        echo "Enabled";
                                                    }
                                                ?>
                                        </div>
                                    </div>
                                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group border mb-3">
                                    <?php
                                        if ($user->photoUrl != NULL) {
                                            ?>
                                            <img src="<?=$user->photoUrl?>" class="w-100" alt="User Profile">
                                            <?php
                                        }
                                        else {
                                            echo "update ur pf";
                                        }
                                    ?>
                    
                                </div>
                                <div class="form-group border mb-3">
                                    <label for="">Upload Profile Image</label>
                                    <input type="file" name="profile" class="form-control">
                                </div>  
                            </div>
                            <div class="col-md-12">
                                <hr>
                                <div class="form-group mb-3">
                                    <button type="submit" name="update_user_profile" class= "btn btn-primary float-end">Update Prof</button>
                                </div>
                            </div>
                        </form>
                                <?php
                            }

                        ?>


                    </div>
                </div>

            </div>
        </div>
    </div>

<?php
    include ('includes/footer.php'); 
?>    