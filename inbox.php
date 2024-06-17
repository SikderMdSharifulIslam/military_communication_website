<!-- Header Part Start -->
<?php
require_once 'includes/header.php';
require_once 'includes/db.php';

$select_query = "SELECT code,type,message FROM inbox";
$data_from_db = mysqli_query($db_connect, $select_query);

$totalU = mysqli_query($db_connect,"SELECT COUNT(*) as total FROM inbox");
$totalA = mysqli_fetch_assoc($totalU);
$total_message = $totalA['total'];

?>
<div class="container">
<?php
require_once 'includes/navbar.php';
?>
</div>

<!-- Header Part End -->

<div class="container">
    <div class="col-lg-12 m-auto">
        <div class="card bg-dark mb-3">
            <div class="card-body text-success">
                <!-- User Table -->
                <table class="text-center table table-dark">
                    <tbody style="width: 100%;">
                        <tr>
                            <th class="text-danger">#</th>
                            <th class="text-danger">Code</th>
                            <th class="text-danger">Type</th>
                            <th class="text-danger">Message</th>
                        </tr>
                        <?php
                            $serial_no = 1;
                            foreach($data_from_db as $user_value):
                        ?>
                        <tr>
                            <td class="text-danger"><?=$serial_no++?></td>
                            <td class="text-danger"><?=$user_value['code']?></td>
                            <td class="text-danger"><?=$user_value['type']?></td>
                            <td class="text-danger"><?=$user_value['message']?></td>
                        </tr>
                        <?php
                            endforeach;
                        ?>
                    </tbody>
                </table>
                <!-- User Table -->
            </div>
        </div>
    </div>
</div>

<!-- Footer Part Start -->
<?php
include 'includes/footer.php';
?>
<!-- Footer Part End -->