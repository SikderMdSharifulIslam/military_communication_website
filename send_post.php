<?php

require_once 'includes/db.php';

$type = $_POST['type'];
$message = $_POST['message'];
$flag = 'F';
$escape = 'E';


// binary to string
// $binary = str_replace(" ", "", $binary); // Remove any spaces
// $string = '';
// for ($i = 0; $i < strlen($binary); $i += 8) {
//     $string .= pack('H*', dechex(bindec(substr($binary, $i, 8))));
// }
// echo "<br>".$string;

// echo $type;




// Parity Check
$count = 0;
$parity;
for ($j = 0; $j < strlen($type); $j++) {
    if ($type[$j] == '1') {
        $count++;
    }
}
if ($count % 2 == 0) {
    $parity = 'common';
} else {
    $parity = 'secret';
}
echo $parity, $count;

// Character Stuffing
$stuffedData = "DLESTX";
for ($i = 0; $i < strlen($message); $i++) {
    if ($message[$i] == $flag) {
        $stuffedData .= $flag . $escape;
    } else {
        $stuffedData .= $message[$i];
    }
}
$stuffedData .= "DLEETX";


// Convert Stuffed Data into Binary
$binary = "";
for ($i = 0; $i < strlen($message); $i++) {
    $binary .= sprintf("%08b", ord($message[$i]));
}
echo "<br>".$binary;

// $insert_query = "INSERT INTO send(type, message) VALUES ('$parity','$stuffedData');";
$insert_query = "INSERT INTO send(type, message, encode) VALUES ('$parity','$binary','$type');";
mysqli_query($db_connect, $insert_query);

$deStuffedData = "";
for ($i = 6; $i < strlen($stuffedData) - 6; $i++) {
    if ($stuffedData[$i] == $flag && $stuffedData[$i + 1] == $escape) {
        $deStuffedData .= $flag;
        $i++;
    } else {
        $deStuffedData .= $stuffedData[$i];
    }
}

$insert_query2 = "INSERT INTO inbox(type, message, encode) VALUES ('$parity','$deStuffedData','$type');";
// $insert_query2 = "INSERT INTO inbox(type, message) VALUES ('$parity','$string');";
mysqli_query($db_connect2, $insert_query2);

header("location: send.php");
