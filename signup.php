<!-- Header Part Start -->
<?php
require_once 'includes/header.php';
require_once 'includes/navbar.php';

?>
<!-- Header Part End -->

<div class="">
    <div class="col-lg-12 m-auto bg-light">
        <div class="card bg-light mb-3">
            <div class="card-header text-black text-center">
                Header
            </div>
            <div class="card-body text-success">
                <!-- form start -->
                <form action="result.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label text-black">Name</label>
                        <input type="text" class="form-control" name="full_name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-black">Email</label>
                        <input type="email" class="form-control" name="your_email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-black">Password</label>
                        <input type="password" class="form-control" name="your_password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-black">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
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