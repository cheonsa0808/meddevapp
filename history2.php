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
                        <h4> History </h4>
                    </div>
                     
                    <div class="card-body">
                        <?php

                            if (isset ($_SESSION['verified_user_id'])) {
                                $uid = $_SESSION['verified_user_id'];
                                $user = $auth->getUser($uid);
                                ?>

                                <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class= "table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Phone No.</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        //$ref = $database->getReference("RaspResult/")->equalTo($user);//
                                        $ref = "RaspResult/";
                                        $fetchdata = $database->getReference($ref)->getValue();
                                        $i = 0;

                                        if ($fetchdata>0){
                                        foreach ($fetchdata as $key => $row) {    
                                            $i++;
                                            $value="<?=$ref->Image URI;?>";
                                            $value="<?=$ref->Medicine Name;?>";
                                            $value="<?=$ref->Prediction;?>";

                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row ['ImageURI']; ?></td>
                                        <td><?php echo $row ['MedicineName']; ?></td>
                                        <td><?php echo $row ['Prediction']; ?></td>
                                        <td>
                                            <a href="" class="btn btn-danger">Report</a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    }
                                }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>

<?php include ('includes/footer.php'); ?>