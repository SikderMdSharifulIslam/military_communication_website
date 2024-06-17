<?php

require_once 'includes/db.php';

$select_query = "SELECT code,type,message, encode FROM send";
$data_from_db = mysqli_query($db_connect2, $select_query);

$totalU = mysqli_query($db_connect2,"SELECT COUNT(*) as total FROM send");
$totalA = mysqli_fetch_assoc($totalU);
$total_message = $totalA['total'];

$select_query2 = "SELECT message, encode FROM inbox";
$data_from_db2 = mysqli_query($db_connect, $select_query2);

// CRC Start
$dataX = mysqli_fetch_assoc($data_from_db);
$dataY = mysqli_fetch_assoc($data_from_db2);

// $dataX = mysqli_fetch_assoc($data_from_db);
// $div = $data_from_db['encode'];
$temp = $total = "";

// echo "<br>" . strlen($div);
// echo "<br>" . strlen($data);
$data = $dataX['message'];
$data2 = $dataY['message'];
$data2 = $dataY['encode'];

// Convert Stuffed Data into Binary
$binary = "";
for ($i = 0; $i < strlen($data2); $i++) {
    $binary .= sprintf("%08b", ord($data2[$i]));
}
// echo "<br>".$binary;


// echo "<br>";
// echo $data;
// echo $data2;
// die();

$div = $dataX['encode'];
// $div = print_r($dataX['encode']);

// echo $data;
// echo "<br>".$div;

// die();

$divlen = strlen($div);

$len = strlen($data) + strlen($div) - 1;

$div = "1011";
// echo "<br>" . $len;

// die();

$total = $data . str_repeat('0', $divlen - 1);
$temp = $data;

// CRC checking function
global $k;
for ($k = 0; $k < $divlen; $k++) {
    $data[$k] = $total[$k];
}
while ($k <= $len) {
    if ($data[0] == '1') {
        for ($v = 1; $v < $divlen; $v++) {
            $data[$v] = ($data[$v] == $div[$v]) ? '0' : '1';
        }
    }

    for ($p = 0; $p < $divlen - 1; $p++) {
        $data[$p] = $data[$p + 1];
    }
    if ($k < $len && isset($total[$k])) {
        $data[$p] = $total[$k];
    }
    $k++;
}

$flag=0;
if($data==$data2 && $div=="1011")
{
    $flag=1;
}

if ($flag == 1) {
    echo "\nSuccessful! Received code words do not have any errors\n";
} else {
    echo "\nReceived code words contain errors...\n";
}

// CRC End
?>