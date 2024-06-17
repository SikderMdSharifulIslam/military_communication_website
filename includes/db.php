<?php

// Database Connection
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE_NAME", "brigade_1");
define("DATABASE2_NAME", "brigade_2");
$db_connect = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);
$db_connect2 = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE2_NAME);

?>