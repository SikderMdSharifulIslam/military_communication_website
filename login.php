<!-- Header Part Start -->
<?php

session_start();

require_once 'includes/header.php';
require_once 'includes/navbar.php';
require_once 'includes/db.php';
?>
<!-- Header Part End -->


<div class="">
    <div class="col-lg-12 m-auto bg-light">
        <div class="card bg-light mb-3">
            <div class="card-header text-center">
                Header
            </div>
            <div class="card-body text-success">
                <!-- form start -->
                <form action="login_post.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label text-black">Email</label>
                        <input type="email" class="form-control" name="your_email">
                    </div>

                    <?php
                        if(isset($_SESSION ['invalid_email'])){
                            ?>
                        <strong class="text-danger mb-3"><?=$_SESSION ['invalid_email'];?></strong>
                    <?php } unset($_SESSION ['invalid_email'])?>

                    <div class="mb-3">
                        <label class="form-label text-black">Password</label>
                        <input type="password" class="form-control" name="your_password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Login</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
                <!-- form end -->
            </div>
        </div>
    </div>
</div>


<!-- Footer Part Start -->
<?php
include 'includes/footer.php';
?>
<!-- Footer Part End -->