<?php
$db_host = "localhost"; // hostname
$db_user = ""; // database username
$db_pass = ""; // database password
$db_name = ""; // database name

// Database connection
$DBconn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check Connection
/* if ($DBconn) {
   echo "Database connected!";
 } else {
   die("ERROR! Database not connected!");
 }
 */
