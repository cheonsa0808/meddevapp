<?php
    session_start();
    include ('authentication.php');
    include ('includes/header.php'); 
    include ('includes/navbar.php'); 
?>  

<div class="container bootstrap snippets bootdey">
      <hr>  
      <form action="code.php" method="POST" enctype="multipart/form-data">
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
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
            <input type="file" name="profile" class="form-control">
        </div>  
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Name</label>
            <div class="col-lg-8">
            <input type="text" name="display_name" value="<?=$user->displayName;?>" required class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Phone</label>
            <div class="col-lg-8">
            <input type="text" name="phone" value="<?=$user->phoneNumber;?>" required class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Email</label>
            <div class="col-lg-8">
            <div class="form-control">
            <?=$user->email;?>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Status</label>
            <div class="form-control">
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
          <div class="col-md-12">
                <div class="form-group mb-3">
                    <button type="submit" name="update_user_profile" class= "btn btn-primary float-end">Update Prof</button>
                </div>
            </div>
        </form>
      </div>
  </div>
</div>
<hr>