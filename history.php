<?php
include('authentication.php');
include ('includes/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (isset($_SESSION['status']) && $_SESSION['status'] != "")
            {
            ?>
            <div class="alert alert-warning alert-dismissable fade show" role="alert">
                <strong>Hey!</strong> <?php echo $_SESSION['status'];?>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            unset($_SESSION['status']); } ?>
        </div>
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
                                        include ('dbcon.php');
                                        $user = $auth->getUser($uid);
                                        $ref = "$uid/RaspResult/"; //table
                                        $fetchdata = $database->getReference($ref)->getValue();

                                        if ($fetchdata>0){
                                        foreach ($fetchdata as $key => $row) {    
                                            $i++;         
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row ['ImageURI']; ?></td>
                                        <td><?php echo $row ['MedicineName']; ?></td>
                                        <td><?php echo $row ['Prediction']; ?></td>
                                        <td>
                                            <a href="" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                    <?php
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