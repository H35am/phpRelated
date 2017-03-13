<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'mysql';
$dbname = 'comments';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("geen connectie");

mysqli_select_db($conn, $dbname);
?>
