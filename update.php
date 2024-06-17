<?php

require_once 'includes/header.php';
require_once 'includes/navbar.php';
require_once 'includes/db.php';
$id = $_GET['id'];

?>

<div class="">
    <div class="col-lg-12 m-auto bg-light">
        <div class="card bg-light mb-3">
            <div class="card-header text-center">
                Header
            </div>
            <div class="card-body text-success">
                <!-- form start -->
                <form action="update_post.php?id=<?=$_GET['id']?>" method="POST">

                    <div class="mb-3">
                        <label class="form-label text-black">Change Name</label>
                        <input type="text" class="form-control" name="full_name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-black">Change Email</label>
                        <input type="email" class="form-control" name="your_email">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
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