<!-- Header Part Start -->
<?php
require_once 'includes/header_2.php';
?>
<div class="container">
<?php
require_once 'includes/navbar_2.php';
?>
</div>

<!-- Header Part End -->

<div class="container">
    <div class="col-lg-12 m-auto">
        <div class="card bg-dark mb-3">
            <div class="card-body text-success">
                <!-- form start -->
                <form action="send_post_2.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label text-danger">Type</label>
                        <input type="text" class="form-control bg-dark text-danger border-danger rounded mb-3" name="type" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-danger">Message</label>
                        <input type="text" class="form-control bg-dark text-danger border-danger rounded mb-3" name="message" required>
                    </div>                    
                    <button type="submit" class="bg-dark text-danger border-danger rounded text-center me-2">Submit</button>
                    <button type="reset" class="bg-dark text-danger border-danger rounded text-center">Reset</button>
                </form>
                <!-- form end -->
            </div>
        </div>
    </div>
</div>

<!-- Footer Part Start -->
<?php
include 'includes/footer_2.php';
?>
<!-- Footer Part End -->