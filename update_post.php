<?php

require_once 'includes/header.php';
require_once 'includes/navbar.php';
require_once 'includes/db.php';

$id = $_GET['id'];
$full_name = $_POST ['full_name'];
$your_email = $_POST ['your_email'];

$update_query = "UPDATE users SET full_name = '$full_name', email_address = '$your_email' WHERE id=$id";
$update_value = mysqli_query($db_connect,$update_query);

if($update_value)
{
    header("location: view.php");
}
else
{
    echo "Not Updated!";
}


?>
