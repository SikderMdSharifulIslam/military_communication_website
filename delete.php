<?php
require_once 'includes/db.php';

$id = $_GET['id'];
$delete_query = "DELETE FROM users WHERE id=$id";
$delete_row = mysqli_query($db_connect,$delete_query);

if($delete_row)
{
    header("location: view.php");
}
else
{
    echo "Not Deleted!";
}

?>
