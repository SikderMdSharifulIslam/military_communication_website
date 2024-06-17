<?php

//header
require_once 'includes/header.php';
require_once 'includes/navbar.php';
require_once 'includes/db.php';

// Database connect
// $hostname = "localhost";
// $username = "root";
// $password = "";
// $database_name = "sign_up";
// define("HOSTNAME", "localhost");
// define("USERNAME", "root");
// define("PASSWORD", "");
// define("DATABASE_NAME", "sign_up");
// $db_connect = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);


$full_name = $_POST ['full_name'];
$your_email = $_POST ['your_email'];
$your_password = $_POST ['your_password'];
$confirm_password = $_POST ['confirm_password'];
$after_hash =  password_hash($password, PASSWORD_DEFAULT);

$_SESSION ['duplicate'] = "Email Already Used!";

if($your_password == $confirm_password)
{

    $count_query = "SELECT COUNT(*) as duplicateEmail FROM users WHERE email_address = '$your_email'";
    $from_db = mysqli_query($db_connect, $count_query);
    $after_assoc = mysqli_fetch_assoc($from_db);
    // print_r($after_assoc['duplicateEmail']);

    if($after_assoc['duplicateEmail'] == 0)
    {
        // $insert_query = "INSERT INTO users(full_name, email_address, password) VALUES ('$full_name','$your_email','$after_hash');";
        $insert_query = "INSERT INTO users(full_name, email_address, password) VALUES ('$full_name','$your_email','$your_password');";
        mysqli_query($db_connect,$insert_query);
        header("location: login.php");
    }
    else
    {
        echo "Email Already Used!";
    }

    // $insert_query = "INSERT INTO users(full_name, email_address, password) VALUES ('$full_name','$your_email','$your_password');";
    // mysqli_query($db_connect,$insert_query);
    // header("location: login.php");
}
else
{
    echo "Not Matched!";
}

//footer
include 'includes/footer.php';

?>