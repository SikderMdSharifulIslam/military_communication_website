<?php

$code = $_POST ['code'];
$passcode = $_POST ['passcode'];

if($code == 12345 && $passcode == "brigade_1")
{
    header('location: brigade_1.php');
}
else if($code == 11155 && $passcode == "brigade_2")
{
    header('location: brigade_2.php');
}
else
{
    header('location: index.php');
}

?>