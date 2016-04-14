<?php
$host="ec2-23-21-255-14.compute-1.amazonaws.com"; // Host name
$username="uksylksjjezsif"; // Mysql username
$password="hs_6PoyzBubhGXxupSatyHxjGp"; // Mysql password
$db_name="d4at4d6tbtto79"; // Database name
$tbl_name="test"; // Table name

// Connect to server and select database.
$link = mysql_connect("$host", "$username", "$password")
if (!$link) {
echo "<p>Could not connect to the server '" . $host . "'</p>\n";
echo mysql_error();
} else {
echo "<p>Successfully connected to the server '" . $host . "'</p>\n";
}

?>