<?php
$db_host = "localhost";
$db_user = "dojo";
$db_pass = "somepass";
$db_name = "dojocontacts";

//Connect to MySQL
$conn = mysqli_connect($db_host, $db_user, $db_pass);
//Select database
mysqli_select_db($conn, $db_name);
?>