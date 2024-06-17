<?php

session_start();

//header
require_once 'includes/header.php';
require_once 'includes/navbar.php';
require_once 'includes/db.php';

$your_email = $_POST ['your_email'];
$your_password = $_POST ['your_password'];


$count_query = "SELECT COUNT(*) as userFound FROM users WHERE email_address = '$your_email' AND password = '$your_password'";

$from_db = mysqli_query($db_connect, $count_query);
$after_assoc = mysqli_fetch_assoc($from_db);

if($after_assoc['userFound'] == 1)
{
    echo "Welcome!";
}
else
{
    echo "Sorry, No user found!";
}


// +++++++++++++++++++++++++++++++++++++++++++++++++++++++

// $count_query = "SELECT COUNT(*) as userFound FROM users WHERE email_address = '$your_email'";

// $from_db = mysqli_query($db_connect, $count_query);
// $after_assoc = mysqli_fetch_assoc($from_db);

// if($after_assoc['userFound'] == 1)
// {
//     $count_query2 = "SELECT * FROM users WHERE email_address = '$your_email'";
//     $from_db2 = mysqli_query($db_connect, $count_query2);
//     $after_assoc2 = mysqli_fetch_assoc($from_db2);
//     echo $after_assoc2['password'];
//     echo $your_password;
//     if(password_verify($your_password, $after_assoc2['password'])){
//         echo "valid";
//     }
//     else{
//         echo "invalid";
//     }
// }
// else
// {
//     $_SESSION ['invalid_email'] = 'Invalid Email Address';
//     header('location: login.php');
// }

?>